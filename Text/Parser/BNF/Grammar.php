<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 foldmethod=marker: */
require_once('Structures/Grammar.php');

/**
 * This class represents a BNF grammar. It can be used, with Text_Parser_Generator 
 * to generate a parser for BNF grammar descriptions
 *
 * The described grammar can be represented in BNF as:
 *   <syntax>              ::= <rule> | <rule> <syntax>
 *   <rule>                ::= <opt-whitespace> "<" <rule-name> ">" <rule-priority> "::=" 
 *                             <opt-whitespace> <expression> <line-end> <reduction-code>
 *   <rule-priority>       ::= <opt-whitespace> | "(" <unquoted-text> ")" <opt-whitespace>
 *   <opt-whitespace>      ::= " " <opt-whitespace> | ""  
 *   <expression>          ::= <list> | <list> <opt-whitespace> "|" <opt-whitespace> <expression>
 *   <line-end>            ::= <opt-whitespace> <EOL> | <line-end> <line-end>
 *   <list>                ::= <term> | <term> <opt-whitespace> <list>
 *   <term>                ::= <named-term> | <unnamed-term>
 *   <named-term>          ::= <unnamed-term> <opt-whitespace> "(" <unquoted-text> ")"
 *   <unnamed-term>        ::= <literal> | "<" <rule-name> ">" | '""'
 *   <literal>             ::= '"' <double-quoted-text> '"' | "'" <single-quoted-text> "'"
 *   <double-quoted-text>  ::= <quoted-text-part> | "'" | <double-quoted-text> <quoted-text-part> | <double-quoted-text> "'"
 *   <single-quoted-text>  ::= <quoted-text-part> | '"' | <single-quoted-text> <quoted-text-part> | <single-quoted-text> '"'
 *   <quoted-text-part>    ::= "(" | ")" | "<" | ">" | "::=" | " " | '""' | "|" | <text-terminal> | <quoted-character>
 *   <rule-name>           ::= <unquoted-text>
 *   <unquoted-text>       ::= <text-terminal> | <quoted-character> | <unquoted-text><text-terminal> | <unquoted-text><quoted-character>
 *   <reduction-code>      ::= "<<<" <line-end> <reduction-code-text> <EOL> ">>>" <line-end> | ""
 *   <reduction-code-text> ::= <reduction-code-text-part>
 *   <reduction-code-text> ::= <reduction-code-text-part> <reduction-code-text>
 *   <reduction-code-text-part> ::= <EOL> | "<<<" | ">>>" | '"' | "'" | "(" | ")" | "<" | ">" | "::=" | " " | '""' | "|" | <text-terminal> | <quoted-character>
 */
class Text_Parser_BNF_Grammar extends Structures_Grammar
{
    public function __construct()
    {
        parent::__construct(true, false);
        require_once('Structures/Grammar/Rule.php');
        require_once('Structures/Grammar/Symbol.php');
        $identityFunction =<<<EOS
\$result = func_get_arg(0)->getValue();
EOS;
        $concatenateFunction =<<<EOS
\$result = '';
foreach (func_get_args() as \$arg) \$result .= \$arg->getValue();
EOS;

        /*                       |      Production      |  Rule                            |*/
        $this->addContextFreeRule('S',                  '<grammar>');
        $r = $this->addContextFreeRule('<grammar>',                  '<syntax>');
        $r->addReductionFunctionSymbolmap(0, '$syntax');
        $r->setReductionFunction(<<<EOS
\$result = \$syntax->getValue();
\$result->computeTerminals();
\$result->setContextFree(true);
EOS
        );
        $r = $this->addContextFreeRule('<syntax>',           '<rule>');
        $r->addReductionFunctionSymbolmap(0, '$rule');
        $r->setReductionFunction(<<<EOS
require_once('Structures/Grammar.php');
\$result = new Structures_Grammar();
\$result->setContextFree(false);
\$result->setRegular(false);
foreach(\$rule->getValue() as \$r) \$result->addRule(\$r);
EOS
        );

        $r = $this->addContextFreeRule('<syntax>',           '<syntax>','<rule>');
        $r->addReductionFunctionSymbolmap(0, '$syntax');
        $r->addReductionFunctionSymbolmap(1, '$rule');
        $r->setReductionFunction(<<<EOS
\$result = \$syntax->getValue();
foreach(\$rule->getValue() as \$r) \$result->addRule(\$r);
\$result->computeTerminals();
EOS
        );

        $r = $this->addContextFreeRule('<rule>',             '<opt-whitespace>','<','<rule-name>','>','<rule-priority>','::=','<opt-whitespace>','<expression>', '<line-end>', '<reduction-code>');
        $r->addReductionFunctionSymbolmap(2, '$ruleName');
        $r->addReductionFunctionSymbolmap(4, '$priority');
        $r->addReductionFunctionSymbolmap(7, '$expression');
        $r->addReductionFunctionSymbolmap(9, '$code');
        $r->setReductionFunction(<<<EOS
require_once('Structures/Grammar/Symbol.php');
\$result =& \$expression->getValue();
\$ruleName = '<' . \$ruleName->getValue() . '>';
foreach(\$result as \$i => \$rule) {
    \$result[\$i]->addSymbolToLeft(Structures_Grammar_Symbol::create(\$ruleName));
    \$result[\$i]->setReductionFunction(\$code->getValue());
    \$result[\$i]->setPriority(\$priority->getValue());
}
EOS
        );
        $r = $this->addContextFreeRule('<rule-priority>',    '<opt-whitespace>');
        $r->setReductionFunction('$result = 0;');
        $r = $this->addContextFreeRule('<rule-priority>',    '(','<unquoted-text>',')','<opt-whitespace>');
        $r->addReductionFunctionSymbolmap(1, '$text');
        $r->setReductionFunction(<<<EOS
\$result = (int) \$text->getValue();
EOS
        );
        $this->addContextFreeRule('<line-end>',         '<opt-whitespace>','<EOL>');
        $this->addContextFreeRule('<line-end>',         '<line-end>','<EOL>');
        $this->addContextFreeRule('<opt-whitespace>',   ' ', '<opt-whitespace>');
        $this->addContextFreeRule('<opt-whitespace>'    )->setPriority(-1);
        $r = $this->addContextFreeRule('<expression>',       '<list>');
        $r->addReductionFunctionSymbolmap(0, '$list');
        $r->setReductionFunction(<<<EOS
require_once('Structures/Grammar/Rule.php');
require_once('Structures/Grammar/Symbol.php');

\$newRule = new Structures_Grammar_Rule();
foreach(\$list->getValue() as \$idx => \$term) if (!is_null(\$term)) {
    \$newRule->addSymbolToRight(Structures_Grammar_Symbol::create(\$term['term']));
    if (\$term['reductionArgumentName'] != '') \$newRule->addReductionFunctionSymbolmap(\$newRule->rightCount()-1, '$' . \$term['reductionArgumentName']);
}
\$result = array(\$newRule);
EOS
        );
        $r = $this->addContextFreeRule('<expression>',       '<expression>','<opt-whitespace>','|','<opt-whitespace>','<list>');
        $r->addReductionFunctionSymbolmap(0, '$expression');
        $r->addReductionFunctionSymbolmap(4, '$list');
        $r->setReductionFunction(<<<EOS
require_once('Structures/Grammar/Rule.php');
require_once('Structures/Grammar/Symbol.php');

\$newRule = new Structures_Grammar_Rule();
foreach(\$list->getValue() as \$idx => \$term) if (!is_null(\$term)) {
    \$newRule->addSymbolToRight(Structures_Grammar_Symbol::create(\$term['term']));
    if (\$term['reductionArgumentName'] != '') \$newRule->addReductionFunctionSymbolmap(\$newRule->rightCount()-1, '$' . \$term['reductionArgumentName']);
}
\$result = \$expression->getValue();
\$result[] =& \$newRule;
EOS
        );
        $r = $this->addContextFreeRule('<list>',             '<term>');
        $r->addReductionFunctionSymbolmap(0, '$term');
        $r->setReductionFunction(<<<EOS
\$result = array(\$term->getValue());
EOS
        );
        $r = $this->addContextFreeRule('<list>',             '<list>','<opt-whitespace>','<term>');
        $r->addReductionFunctionSymbolmap(0, '$list');
        $r->addReductionFunctionSymbolmap(2, '$term');
        $r->setReductionFunction(<<<EOS
\$result =& \$list->getValue();
\$result[] =& \$term->getValue();
EOS
        );
        $r = $this->addContextFreeRule('<term>',             '<named-term>');
        $r->addReductionFunctionSymbolmap(0, '$term');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<term>',             '<unnamed-term>');
        $r->addReductionFunctionSymbolmap(0, '$term');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<named-term>',       '<unnamed-term>', '(', '<unquoted-text>', ')');
        $r->addReductionFunctionSymbolmap(0, '$unnamedTerm');
        $r->addReductionFunctionSymbolmap(2, '$reductionArgumentName');
        $r->setReductionFunction(<<<EOS
\$unnamedTerm = \$unnamedTerm->getValue();
\$unnamedTerm = \$unnamedTerm['term'];
\$result = array(
    'reductionArgumentName' => \$reductionArgumentName->getValue(),
    'term' => \$unnamedTerm);
EOS
        );
        $r = $this->addContextFreeRule('<unnamed-term>',     '<literal>');
        $r->addReductionFunctionSymbolmap(0, '$literal');
        $r->setReductionFunction(<<<EOS
\$result = array(
    'reductionArgumentName' => '',
    'term' => \$literal->getValue());
EOS
        );
        $r = $this->addContextFreeRule('<unnamed-term>',     '<','<rule-name>','>');
        $r->addReductionFunctionSymbolmap(1, '$ruleName');
        $r->setReductionFunction(<<<EOS
\$result = array(
    'reductionArgumentName' => '',
    'term' => '<' . \$ruleName->getValue() . '>');
EOS
        );
        $r = $this->addContextFreeRule('<unnamed-term>',     '""');
        $r->addReductionFunctionSymbolmap(0, '$literal');
        $r->setReductionFunction(<<<EOS
\$result = null;
EOS
        );

        $r = $this->addContextFreeRule('<literal>',          '"','<double-quoted-text>','"');
        $r->addReductionFunctionSymbolmap(1, '$textb');
        $r->setReductionFunction($concatenateFunction);
        $r = $this->addContextFreeRule('<literal>',          '\'','<single-quoted-text>','\'');
        $r->addReductionFunctionSymbolmap(1, '$textb');
        $r->setReductionFunction($concatenateFunction);

        $r = $this->addContextFreeRule('<double-quoted-text>','<quoted-text-part>');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<double-quoted-text>','\'');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<double-quoted-text>','<double-quoted-text>','<quoted-text-part>');
        $r->addReductionFunctionSymbolmap(0, '$texta');
        $r->addReductionFunctionSymbolmap(1, '$textb');
        $r->setReductionFunction($concatenateFunction);
        $r = $this->addContextFreeRule('<double-quoted-text>','<double-quoted-text>','\'');
        $r->addReductionFunctionSymbolmap(0, '$texta');
        $r->addReductionFunctionSymbolmap(1, '$textb');
        $r->setReductionFunction($concatenateFunction);
        $r = $this->addContextFreeRule('<single-quoted-text>','<quoted-text-part>');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<single-quoted-text>','"');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<single-quoted-text>','<single-quoted-text>','<quoted-text-part>');
        $r->addReductionFunctionSymbolmap(0, '$texta');
        $r->addReductionFunctionSymbolmap(1, '$textb');
        $r->setReductionFunction($concatenateFunction);
        $r = $this->addContextFreeRule('<single-quoted-text>','<single-quoted-text>','"');
        $r->addReductionFunctionSymbolmap(0, '$texta');
        $r->addReductionFunctionSymbolmap(1, '$textb');
        $r->setReductionFunction($concatenateFunction);
        $r = $this->addContextFreeRule('<quoted-text-part>','<text-terminal>');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<quoted-text-part>','<quoted-character>');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction(<<<EOS
\$result = \$text->getValue();
\$result = \$result[1];
EOS
        );
        $r = $this->addContextFreeRule('<quoted-text-part>','>>>');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<quoted-text-part>','<<<');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<quoted-text-part>','(');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<quoted-text-part>',')');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<quoted-text-part>',' ');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<quoted-text-part>','<');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<quoted-text-part>','>');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<quoted-text-part>','|');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<quoted-text-part>','::=');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<quoted-text-part>','""');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<rule-name>',        '<unquoted-text>');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<unquoted-text>',             '<text-terminal>');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<unquoted-text>',             '<quoted-character>');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->setReductionFunction(<<<EOS
\$result = \$text->getValue();
\$result = \$result[1];
EOS
        );
        $r = $this->addContextFreeRule('<unquoted-text>',             '<unquoted-text>','<text-terminal>');
        $r->addReductionFunctionSymbolmap(0, '$texta');
        $r->addReductionFunctionSymbolmap(1, '$textb');
        $r->setReductionFunction($concatenateFunction);
        $r = $this->addContextFreeRule('<unquoted-text>',             '<unquoted-text>','<quoted-character>');
        $r->addReductionFunctionSymbolmap(0, '$texta');
        $r->addReductionFunctionSymbolmap(1, '$textb');
        $r->setReductionFunction(<<<EOS
\$result = \$textb->getValue();
\$result = \$texta . \$result[1];
EOS
        );
        $r = $this->addContextFreeRule('<reduction-code>',            "<<<", '<EOL>', '<reduction-code-text>', '<EOL>', ">>>", '<line-end>');
        $r->addReductionFunctionSymbolmap(2, '$code');
        $r->setReductionFunction('$result = $code->getValue();');
        $r = $this->addContextFreeRule('<reduction-code>');
        $r = $this->addContextFreeRule('<reduction-code-text>',       '<reduction-code-text-part>');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text>',       '<reduction-code-text>', '<reduction-code-text-part>');
        $r->addReductionFunctionSymbolmap(0, '$text');
        $r->addReductionFunctionSymbolmap(1, '$part');
        $r->setReductionFunction($concatenateFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '<EOL>');
        $r->addReductionFunctionSymbolmap(0, '$eol');
        $r->setReductionFunction($identityFunction);
        $r->setPriority(-1);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '>>>');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '<<<');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '"');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  "'");
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '(');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  ')');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '<');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '>');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '::=');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  ' ');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '""');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '|');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '<text-terminal>');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
        $r = $this->addContextFreeRule('<reduction-code-text-part>',  '<quoted-character>');
        $r->addReductionFunctionSymbolmap(0, '$part');
        $r->setReductionFunction($identityFunction);
    }
}
?>

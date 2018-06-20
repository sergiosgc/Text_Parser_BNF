--TEST--
Lex BNF description in BNF using the BNF lexer
--FILE--
<?php
require_once(__DIR__ . '/../vendor/autoload.php');

$tokenizer = new \sergiosgc\Text_Parser_BNF_Tokenizer(
    file_get_contents(getcwd() . '/inputs/bnf.txt'),
    new \sergiosgc\Text_Tokenizer_Regex_Matcher_Php());

while ($token = $tokenizer->getNextToken()) {
    printf("Lexer output token {%s, '%s'}\n", $token->getId(), addcslashes($token->getValue(), "\0..\37!@\177..\377"));
}

?>
--EXPECT--
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'S'}
Lexer output token {>, '>'}
Lexer output token { , '                   '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'syntax'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'syntax'}
Lexer output token {>, '>'}
Lexer output token { , '              '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'rule'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'rule'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'syntax'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'rule'}
Lexer output token {>, '>'}
Lexer output token { , '                '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'opt-whitespace'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {<, '<'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'rule-name'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {>, '>'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'opt-whitespace'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {::=, '::='}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'opt-whitespace'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'expression'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'line-end'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'reduction-code'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'opt-whitespace'}
Lexer output token {>, '>'}
Lexer output token { , '      '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'opt-whitespace'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {"", '""'}
Lexer output token { , '  '}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'expression'}
Lexer output token {>, '>'}
Lexer output token { , '          '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'list'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'list'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'opt-whitespace'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {|, '|'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'opt-whitespace'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'expression'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'line-end'}
Lexer output token {>, '>'}
Lexer output token { , '            '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'opt-whitespace'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'EOL'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'line-end'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'line-end'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'list'}
Lexer output token {>, '>'}
Lexer output token { , '                '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'term'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'term'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'opt-whitespace'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'list'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'term'}
Lexer output token {>, '>'}
Lexer output token { , '                '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'named-term'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'unnamed-term'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'named-term'}
Lexer output token {>, '>'}
Lexer output token { , '          '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'unnamed-term'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'opt-whitespace'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {(, '('}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'unquoted-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {), ')'}
Lexer output token {", '"'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'unnamed-term'}
Lexer output token {>, '>'}
Lexer output token { , '        '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'literal'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {<, '<'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'rule-name'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {>, '>'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {"", '""'}
Lexer output token {', '''}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'literal'}
Lexer output token {>, '>'}
Lexer output token { , '             '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {", '"'}
Lexer output token {', '''}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'double-quoted-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {", '"'}
Lexer output token {', '''}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {', '''}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'single-quoted-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {', '''}
Lexer output token {", '"'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'double-quoted-text'}
Lexer output token {>, '>'}
Lexer output token { , '  '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'quoted-text-part'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {', '''}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'double-quoted-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'quoted-text-part'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'double-quoted-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {', '''}
Lexer output token {", '"'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'single-quoted-text'}
Lexer output token {>, '>'}
Lexer output token { , '  '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'quoted-text-part'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {", '"'}
Lexer output token {', '''}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'single-quoted-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'quoted-text-part'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'single-quoted-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {", '"'}
Lexer output token {', '''}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'quoted-text-part'}
Lexer output token {>, '>'}
Lexer output token { , '    '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {(, '('}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {), ')'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {<, '<'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {>, '>'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {::=, '::='}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {"", '""'}
Lexer output token {', '''}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {|, '|'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'text-terminal'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'quoted-character'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'rule-name'}
Lexer output token {>, '>'}
Lexer output token { , '           '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'unquoted-text'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'unquoted-text'}
Lexer output token {>, '>'}
Lexer output token { , '       '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'text-terminal'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'quoted-character'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'unquoted-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'text-terminal'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'unquoted-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'quoted-character'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'reduction-code'}
Lexer output token {>, '>'}
Lexer output token { , '      '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {<<<, '<<<'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'line-end'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'reduction-code-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'EOL'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {>>>, '>>>'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'line-end'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {"", '""'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'reduction-code-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'reduction-code-text-part'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'reduction-code-text'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'reduction-code-text-part'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'reduction-code-text'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , '   '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'reduction-code-text-part'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {<<<, '<<<'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {>>>, '>>>'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {", '"'}
Lexer output token {', '''}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {', '''}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {(, '('}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {), ')'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {<, '<'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {>, '>'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {::=, '::='}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {"", '""'}
Lexer output token {', '''}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {", '"'}
Lexer output token {|, '|'}
Lexer output token {", '"'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'text-terminal'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {|, '|'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'quoted-character'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}

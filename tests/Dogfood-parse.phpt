--TEST--
Parse BNF description in BNF using the BNF parser
--FILE--
<?php
require_once(__DIR__ . '/../vendor/autoload.php');

$tokenizer = new \sergiosgc\Text_Parser_BNF_Tokenizer(
    file_get_contents(getcwd() . '/inputs/bnf.txt'),
    new \sergiosgc\Text_Tokenizer_Regex_Matcher_Php());

$parser = new \sergiosgc\Text_Parser_BNF($tokenizer);
//$parser->setDebugLevel(10);
var_dump((string) $parser->parse()->getValue());
?>
--EXPECT--
string(2432) "[0] <S>-><syntax>
[1] <syntax>-><rule>
[2] <syntax>-><rule><syntax>
[3] <rule>-><opt-whitespace><<rule-name>><opt-whitespace>::=<opt-whitespace><expression><line-end><reduction-code>
[4] <opt-whitespace>-> <opt-whitespace>
[5] <opt-whitespace>->
[6] <expression>-><list>
[7] <expression>-><list><opt-whitespace>|<opt-whitespace><expression>
[8] <line-end>-><opt-whitespace><EOL>
[9] <line-end>-><line-end><line-end>
[10] <list>-><term>
[11] <list>-><term><opt-whitespace><list>
[12] <term>-><named-term>
[13] <term>-><unnamed-term>
[14] <named-term>-><unnamed-term><opt-whitespace>(<unquoted-text>)
[15] <unnamed-term>-><literal>
[16] <unnamed-term>-><<rule-name>>
[17] <unnamed-term>->""
[18] <literal>->"<double-quoted-text>"
[19] <literal>->'<single-quoted-text>'
[20] <double-quoted-text>-><quoted-text-part>
[21] <double-quoted-text>->'
[22] <double-quoted-text>-><double-quoted-text><quoted-text-part>
[23] <double-quoted-text>-><double-quoted-text>'
[24] <single-quoted-text>-><quoted-text-part>
[25] <single-quoted-text>->"
[26] <single-quoted-text>-><single-quoted-text><quoted-text-part>
[27] <single-quoted-text>-><single-quoted-text>"
[28] <quoted-text-part>->(
[29] <quoted-text-part>->)
[30] <quoted-text-part>-><
[31] <quoted-text-part>->>
[32] <quoted-text-part>->::=
[33] <quoted-text-part>-> 
[34] <quoted-text-part>->""
[35] <quoted-text-part>->|
[36] <quoted-text-part>-><text-terminal>
[37] <quoted-text-part>-><quoted-character>
[38] <rule-name>-><unquoted-text>
[39] <unquoted-text>-><text-terminal>
[40] <unquoted-text>-><quoted-character>
[41] <unquoted-text>-><unquoted-text><text-terminal>
[42] <unquoted-text>-><unquoted-text><quoted-character>
[43] <reduction-code>-><<<<line-end><reduction-code-text><EOL>>>><line-end>
[44] <reduction-code>->
[45] <reduction-code-text>-><reduction-code-text-part>
[46] <reduction-code-text>-><reduction-code-text-part><reduction-code-text>
[47] <reduction-code-text-part>-><<<
[48] <reduction-code-text-part>->>>>
[49] <reduction-code-text-part>->"
[50] <reduction-code-text-part>->'
[51] <reduction-code-text-part>->(
[52] <reduction-code-text-part>->)
[53] <reduction-code-text-part>-><
[54] <reduction-code-text-part>->>
[55] <reduction-code-text-part>->::=
[56] <reduction-code-text-part>-> 
[57] <reduction-code-text-part>->""
[58] <reduction-code-text-part>->|
[59] <reduction-code-text-part>-><text-terminal>
[60] <reduction-code-text-part>-><quoted-character>
"

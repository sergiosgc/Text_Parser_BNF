--TEST--
Generate parser for an infix calculator and calculate 2+2
--FILE--
<?php
require_once(__DIR__ . '/../vendor/autoload.php');

$tokenizer = new \sergiosgc\Text_Parser_BNF_Tokenizer(
    file_get_contents(getcwd() . '/inputs/infix.txt'),
    new \sergiosgc\Text_Tokenizer_Regex_Matcher_Php());

$parser = new \sergiosgc\Text_Parser_BNF($tokenizer);
//$parser->setDebugLevel(10);
$grammar = $parser->parse()->getValue();

$generator = new \sergiosgc\Text_Parser_Generator_LALR($grammar);
file_put_contents('/tmp/a.php', $generator->generate('Infix_Parser'));
eval($generator->generate('Infix_Parser'));


class DummyTokenizer implements \sergiosgc\Text_Tokenizer
{
    protected $tokens = array();
    protected $i=0;
    public function __construct()
    {
        $this->tokens = array(
            new \sergiosgc\Text_Tokenizer_Token('<digit>', '2'),
            new \sergiosgc\Text_Tokenizer_Token('+', '+'),
            new \sergiosgc\Text_Tokenizer_Token('<digit>', '2'));
        reset($this->tokens);
    }
    public function getNextToken()
    {
        if ($this->i < count($this->tokens)) return $this->tokens[$this->i++];
        return false;
    }
}

$tokenizer = new DummyTokenizer();
$parser = new Infix_Parser($tokenizer);
$parser->setDebugLevel(10);
var_dump($parser->parse());
?>
--EXPECT--
Read token <digit>(2) state []
Shifting to state 4
Read token +(+) state [4]
Reducing using reduce_rule_5 state [4] Result state [3]
Reducing using reduce_rule_4 state [3] Result state [2]
Shifting to state 5
Read token <digit>(2) state [2 5]
Shifting to state 4
Read token () state [2 5 4]
Reducing using reduce_rule_5 state [2 5 4] Result state [2 5 9]
Reducing using reduce_rule_1 state [2 5 9] Result state [1]
Accepting
object(sergiosgc\Text_Tokenizer_Token)#3 (2) {
  ["_id":protected]=>
  string(5) "<sum>"
  ["_value":protected]=>
  int(4)
}

--TEST--
Generate parser for an infix calculator and calculate 2+2
--FILE--
<?php
ini_set('include_path', realpath(dirname(__FILE__) . '/../../Text_Tokenizer') . ':' .
                        realpath(dirname(__FILE__) . '/../../Text_Parser_Generator') . ':' .
                        realpath(dirname(__FILE__) . '/../../Text_Parser') . ':' .
                        realpath(dirname(__FILE__) . '/../../Text_Tokenizer_Regex') . ':' .
                        realpath(dirname(__FILE__) . '/../../Structures_Grammar') . ':' .
                        realpath(dirname(__FILE__) . '/../') . ':' .
                        ini_get('include_path'));
require_once('Structures/Grammar/Symbol.php');
require_once('Structures/Grammar/Rule.php');
require_once('Text/Parser/Generator/LALR.php');
require_once('Text/Parser/Generator/Item.php');
require_once('Text/Parser/BNF.php');
require_once('Text/Parser/BNF/Tokenizer.php');
require_once('Text/Tokenizer/Regex/Matcher/Php.php');

$tokenizer = new Text_Parser_BNF_Tokenizer(
    file_get_contents(getcwd() . '/inputs/infix.txt'),
    new Text_Tokenizer_Regex_Matcher_Php());

$parser = new Text_Parser_BNF($tokenizer);
//$parser->setDebugLevel(10);
$grammar = $parser->parse()->getValue();

$generator = new Text_Parser_Generator_LALR($grammar);
file_put_contents('/tmp/a.php', $generator->generate('Infix_Parser'));
eval($generator->generate('Infix_Parser'));


class DummyTokenizer implements Text_Tokenizer
{
    protected $tokens = array();
    protected $i=0;
    public function __construct()
    {
        $this->tokens = array(
            new Text_Tokenizer_Token('<digit>', '2'),
            new Text_Tokenizer_Token('+', '+'),
            new Text_Tokenizer_Token('<digit>', '2'));
        reset($this->tokens);
    }
    public function getNextToken()
    {
        if ($this->i < count($this->tokens)) return $this->tokens[$this->i++];
        return false;
    }
}

$parser = new Infix_Parser(new DummyTokenizer());
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
object(Text_Tokenizer_Token)#311 (2) {
  ["_id":protected]=>
  string(5) "<sum>"
  ["_value":protected]=>
  int(4)
}
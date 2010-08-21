<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 foldmethod=marker: */
require_once('Text/Tokenizer/Regex.php');
/**
 * A tokenizer for a BNF parser. Companion to Text_Parser_BNF_Grammar and Text_Parser_BNF
 */
class Text_Parser_BNF_Tokenizer extends Text_Tokenizer_Regex
{
    /*     __construct {{ { */
    /**
     * Constructor
     *
     * @param string Input text to tokenize
     * @param Text_Tokenizer_Regex_Matcher (optional) Matcher to use 
     */
    public function __construct($input = null, $matcher = null)
    {
        parent::__construct($matcher);
        if (!is_null($input)) $this->setInput($input);
        $this->addRegex('@^\\\\[\\x00-\\xFF]@', '<quoted-character>');
        $this->addRegex("@^\n@", '<EOL>');
        $this->addRegex('@^<<<@', '<<<');
        $this->addRegex('@^>>>@', '>>>');
        $this->addRegex('@^""@', '""');
        $this->addRegex('@^[(]@', '(');
        $this->addRegex('@^[)]@', ')');
        $this->addRegex('@^[|]@', '|');
        $this->addRegex('@^[<]@', '<');
        $this->addRegex('@^[>]@', '>');
        $this->addRegex('@^[:][:][=]@', '::=');
        $this->addRegex('@^\'@', '\'');
        $this->addRegex('@^"@', '"');
        $this->addRegex('@^ +@', ' ');
        $this->addRegex('@^[\\x21-\\x27\\x2A-\\x3B=\\x3F-\\x7F]+@', '<text-terminal>');

        $this->setSelectionCriteria(Text_Tokenizer_Regex::SELECTFIRST);
    }
    /* }}} */
}
?>

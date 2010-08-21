<?php
ini_set('include_path', realpath(dirname(__FILE__) . '/../Text_Parser_Generator/') . ':' .
                        realpath(dirname(__FILE__) . '/../Structures_Grammar/') . ':' .
                        realpath(dirname(__FILE__) . '/../Text_Tokenizer/') . ':' .
                        ini_get('include_path'));
require_once('Text/Parser/BNF/Grammar.php');
require_once('Text/Parser/Generator/LALR.php');
$generator = new Text_Parser_Generator_LALR(new Text_Parser_BNF_Grammar());
$code = sprintf("<?php\n%s\n?>", $generator->generate('Text_Parser_BNF'));
file_put_contents(getcwd() . '/Text/Parser/BNF.php', sprintf("<?php\n%s\n?>", $generator->generate('Text_Parser_BNF')));
?>

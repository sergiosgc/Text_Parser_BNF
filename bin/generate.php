#!/usr/bin/env php
#<?php
require_once(__DIR__ . '/../vendor/autoload.php');

$generator = new \sergiosgc\Text_Parser_Generator_LALR(new \sergiosgc\Text_Parser_BNF_Grammar());
$code = sprintf("<?php\nnamespace sergiosgc;\n%s\n?>", $generator->generate('Text_Parser_BNF'));
file_put_contents(__DIR__ . '/../lib/sergiosgc/Text/Parser/BNF.php', $code);
?>

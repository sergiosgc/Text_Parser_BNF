--TEST--
Lex BNF description in BNF using the BNF lexer
--FILE--
<?php
ini_set('include_path', realpath(dirname(__FILE__) . '/../../Text_Tokenizer') . ':' .
                        realpath(dirname(__FILE__) . '/../../Text_Tokenizer_Regex') . ':' .
                        realpath(dirname(__FILE__) . '/../') . ':' .
                        ini_get('include_path'));
require_once('Text/Parser/BNF/Tokenizer.php');
require_once('Text/Tokenizer/Regex/Matcher/Php.php');

$tokenizer = new Text_Parser_BNF_Tokenizer(
    file_get_contents(getcwd() . '/inputs/infix.txt'),
    new Text_Tokenizer_Regex_Matcher_Php());

while ($token = $tokenizer->getNextToken()) {
    printf("Lexer output token {%s, '%s'}\n", $token->getId(), addcslashes($token->getValue(), "\0..\37!@\177..\377"));
}

?>
--EXPECT--
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'S'}
Lexer output token {>, '>'}
Lexer output token { , '   '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'sum'}
Lexer output token {>, '>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'sum'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'product'}
Lexer output token {>, '>'}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'a'}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {<quoted-character>, '\+'}
Lexer output token {', '''}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'number'}
Lexer output token {>, '>'}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'b'}
Lexer output token {), ')'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<<<, '<<<'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<text-terminal>, '$result'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '='}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '$a-'}
Lexer output token {>, '>'}
Lexer output token {<text-terminal>, 'getValue'}
Lexer output token {(, '('}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '+'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '$b-'}
Lexer output token {>, '>'}
Lexer output token {<text-terminal>, 'getValue'}
Lexer output token {(, '('}
Lexer output token {), ')'}
Lexer output token {<text-terminal>, ';'}
Lexer output token {<EOL>, '\n'}
Lexer output token {>>>, '>>>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'sum'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'product'}
Lexer output token {>, '>'}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'A'}
Lexer output token {), ')'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<<<, '<<<'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<text-terminal>, '$result'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '='}
Lexer output token { , ' '}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'int'}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '$A-'}
Lexer output token {>, '>'}
Lexer output token {<text-terminal>, 'getValue'}
Lexer output token {(, '('}
Lexer output token {), ')'}
Lexer output token {<text-terminal>, ';'}
Lexer output token {<EOL>, '\n'}
Lexer output token {>>>, '>>>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'product'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'number'}
Lexer output token {>, '>'}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'a'}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {<quoted-character>, '\*'}
Lexer output token {', '''}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'number'}
Lexer output token {>, '>'}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'b'}
Lexer output token {), ')'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<<<, '<<<'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<text-terminal>, '$result'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '='}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '$a-'}
Lexer output token {>, '>'}
Lexer output token {<text-terminal>, 'getValue'}
Lexer output token {(, '('}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '*'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '$b-'}
Lexer output token {>, '>'}
Lexer output token {<text-terminal>, 'getValue'}
Lexer output token {(, '('}
Lexer output token {), ')'}
Lexer output token {<text-terminal>, ';'}
Lexer output token {<EOL>, '\n'}
Lexer output token {>>>, '>>>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'product'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'number'}
Lexer output token {>, '>'}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'N'}
Lexer output token {), ')'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<<<, '<<<'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<text-terminal>, '$result'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '='}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '$N-'}
Lexer output token {>, '>'}
Lexer output token {<text-terminal>, 'getValue'}
Lexer output token {(, '('}
Lexer output token {), ')'}
Lexer output token {<text-terminal>, ';'}
Lexer output token {<EOL>, '\n'}
Lexer output token {>>>, '>>>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'number'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'digit'}
Lexer output token {>, '>'}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'A'}
Lexer output token {), ')'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<<<, '<<<'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<text-terminal>, '$result'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '='}
Lexer output token { , ' '}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'int'}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '$A-'}
Lexer output token {>, '>'}
Lexer output token {<text-terminal>, 'getValue'}
Lexer output token {(, '('}
Lexer output token {), ')'}
Lexer output token {<text-terminal>, ';'}
Lexer output token {<EOL>, '\n'}
Lexer output token {>>>, '>>>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'number'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'number'}
Lexer output token {>, '>'}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'number'}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'digit'}
Lexer output token {>, '>'}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'digit'}
Lexer output token {), ')'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<<<, '<<<'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<text-terminal>, '$result'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '='}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '$number-'}
Lexer output token {>, '>'}
Lexer output token {<text-terminal>, 'getValue'}
Lexer output token {(, '('}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '*'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '10'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '+'}
Lexer output token { , ' '}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'int'}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '$digit-'}
Lexer output token {>, '>'}
Lexer output token {<text-terminal>, 'getValue'}
Lexer output token {(, '('}
Lexer output token {), ')'}
Lexer output token {<text-terminal>, ';'}
Lexer output token {<EOL>, '\n'}
Lexer output token {>>>, '>>>'}
Lexer output token {<EOL>, '\n'}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'number'}
Lexer output token {>, '>'}
Lexer output token { , ' '}
Lexer output token {::=, '::='}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'number'}
Lexer output token {>, '>'}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'A'}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {<quoted-character>, '\.'}
Lexer output token {', '''}
Lexer output token { , ' '}
Lexer output token {<, '<'}
Lexer output token {<text-terminal>, 'digit'}
Lexer output token {>, '>'}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'B'}
Lexer output token {), ')'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<<<, '<<<'}
Lexer output token {<EOL>, '\n'}
Lexer output token {<text-terminal>, '$result'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '='}
Lexer output token { , ' '}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'float'}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {(, '('}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'string'}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '$A-'}
Lexer output token {>, '>'}
Lexer output token {<text-terminal>, 'getValue'}
Lexer output token {(, '('}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '.'}
Lexer output token { , ' '}
Lexer output token {', '''}
Lexer output token {<text-terminal>, '.''}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '.'}
Lexer output token { , ' '}
Lexer output token {(, '('}
Lexer output token {<text-terminal>, 'string'}
Lexer output token {), ')'}
Lexer output token { , ' '}
Lexer output token {<text-terminal>, '$B-'}
Lexer output token {>, '>'}
Lexer output token {<text-terminal>, 'getValue'}
Lexer output token {(, '('}
Lexer output token {), ')'}
Lexer output token {), ')'}
Lexer output token {<text-terminal>, ';'}
Lexer output token {<EOL>, '\n'}
Lexer output token {>>>, '>>>'}
Lexer output token {<EOL>, '\n'}
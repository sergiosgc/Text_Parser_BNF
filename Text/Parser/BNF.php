<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 foldmethod=marker: */
require_once('Text/Parser/LALR.php');
/**
 *
 * This is an automatically generated parser for the following grammar:
 *
 * [0] S-><grammar>
 * [1] <grammar>-><syntax>
 * [2] <syntax>-><rule>
 * [3] <syntax>-><syntax><rule>
 * [4] <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
 * [5] <rule-priority>-><opt-whitespace>
 * [6] <rule-priority>->(<unquoted-text>)<opt-whitespace>
 * [7] <line-end>-><opt-whitespace><EOL>
 * [8] <line-end>-><line-end><EOL>
 * [9] <opt-whitespace>-> <opt-whitespace>
 * [10] <opt-whitespace>->
 * [11] <expression>-><list>
 * [12] <expression>-><expression><opt-whitespace>|<opt-whitespace><list>
 * [13] <list>-><term>
 * [14] <list>-><list><opt-whitespace><term>
 * [15] <term>-><named-term>
 * [16] <term>-><unnamed-term>
 * [17] <named-term>-><unnamed-term>(<unquoted-text>)
 * [18] <unnamed-term>-><literal>
 * [19] <unnamed-term>-><<rule-name>>
 * [20] <unnamed-term>->""
 * [21] <literal>->"<double-quoted-text>"
 * [22] <literal>->'<single-quoted-text>'
 * [23] <double-quoted-text>-><quoted-text-part>
 * [24] <double-quoted-text>->'
 * [25] <double-quoted-text>-><double-quoted-text><quoted-text-part>
 * [26] <double-quoted-text>-><double-quoted-text>'
 * [27] <single-quoted-text>-><quoted-text-part>
 * [28] <single-quoted-text>->"
 * [29] <single-quoted-text>-><single-quoted-text><quoted-text-part>
 * [30] <single-quoted-text>-><single-quoted-text>"
 * [31] <quoted-text-part>-><text-terminal>
 * [32] <quoted-text-part>-><quoted-character>
 * [33] <quoted-text-part>->>>>
 * [34] <quoted-text-part>-><<<
 * [35] <quoted-text-part>->(
 * [36] <quoted-text-part>->)
 * [37] <quoted-text-part>-> 
 * [38] <quoted-text-part>-><
 * [39] <quoted-text-part>->>
 * [40] <quoted-text-part>->|
 * [41] <quoted-text-part>->::=
 * [42] <quoted-text-part>->""
 * [43] <rule-name>-><unquoted-text>
 * [44] <unquoted-text>-><text-terminal>
 * [45] <unquoted-text>-><quoted-character>
 * [46] <unquoted-text>-><unquoted-text><text-terminal>
 * [47] <unquoted-text>-><unquoted-text><quoted-character>
 * [48] <reduction-code>-><<<<EOL><reduction-code-text><EOL>>>><line-end>
 * [49] <reduction-code>->
 * [50] <reduction-code-text>-><reduction-code-text-part>
 * [51] <reduction-code-text>-><reduction-code-text><reduction-code-text-part>
 * [52] <reduction-code-text-part>-><EOL>
 * [53] <reduction-code-text-part>->>>>
 * [54] <reduction-code-text-part>-><<<
 * [55] <reduction-code-text-part>->"
 * [56] <reduction-code-text-part>->'
 * [57] <reduction-code-text-part>->(
 * [58] <reduction-code-text-part>->)
 * [59] <reduction-code-text-part>-><
 * [60] <reduction-code-text-part>->>
 * [61] <reduction-code-text-part>->::=
 * [62] <reduction-code-text-part>-> 
 * [63] <reduction-code-text-part>->""
 * [64] <reduction-code-text-part>->|
 * [65] <reduction-code-text-part>-><text-terminal>
 * [66] <reduction-code-text-part>-><quoted-character>
 *
 * -- Finite State Automaton States --
 * ----------- 0 -----------
 *   --Itemset--
 *     S->•<grammar>
 *    +<grammar>->•<syntax>
 *    +<syntax>->•<rule>
 *    +<syntax>->•<syntax><rule>
 *    +<rule>->•<opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
 *    +<opt-whitespace>->• <opt-whitespace>
 *    +<opt-whitespace>->•(prio:-1)
 *   --Transitions--
 *    Goto on <grammar> to 1 because of S->•<grammar>
 *    Goto on <syntax> to 2 because of <grammar>->•<syntax>
 *    Goto on <rule> to 3 because of <syntax>->•<rule>
 *    Goto on <syntax> to 2 because of <syntax>->•<syntax><rule>
 *    Goto on <opt-whitespace> to 4 because of <rule>->•<opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
 *    Shift on   to 5 because of <opt-whitespace>->• <opt-whitespace> 
 *    Reduce on < using <opt-whitespace>-> 
 *    Reduce on ::= using <opt-whitespace>-> 
 *    Reduce on <EOL> using <opt-whitespace>-> 
 *    Reduce on | using <opt-whitespace>-> 
 *    Reduce on "" using <opt-whitespace>-> 
 *    Reduce on " using <opt-whitespace>-> 
 *    Reduce on ' using <opt-whitespace>-> 
 * ----------- 1 -----------
 *   --Itemset--
 *     S-><grammar>•
 *   --Transitions--
 *    Accept on  using S-><grammar>
 * ----------- 2 -----------
 *   --Itemset--
 *     <grammar>-><syntax>•
 *     <syntax>-><syntax>•<rule>
 *    +<rule>->•<opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
 *    +<opt-whitespace>->• <opt-whitespace>
 *    +<opt-whitespace>->•(prio:-1)
 *   --Transitions--
 *    Reduce on  using <grammar>-><syntax> 
 *    Goto on <rule> to 6 because of <syntax>-><syntax>•<rule>
 *    Goto on <opt-whitespace> to 4 because of <rule>->•<opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
 *    Shift on   to 5 because of <opt-whitespace>->• <opt-whitespace> 
 *    Reduce on < using <opt-whitespace>-> 
 *    Reduce on ::= using <opt-whitespace>-> 
 *    Reduce on <EOL> using <opt-whitespace>-> 
 *    Reduce on | using <opt-whitespace>-> 
 *    Reduce on "" using <opt-whitespace>-> 
 *    Reduce on " using <opt-whitespace>-> 
 *    Reduce on ' using <opt-whitespace>-> 
 * ----------- 3 -----------
 *   --Itemset--
 *     <syntax>-><rule>•
 *   --Transitions--
 *    Reduce on < using <syntax>-><rule> 
 *    Reduce on   using <syntax>-><rule> 
 *    Reduce on  using <syntax>-><rule> 
 * ----------- 4 -----------
 *   --Itemset--
 *     <rule>-><opt-whitespace>•<<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
 *   --Transitions--
 *    Shift on < to 7 because of <rule>-><opt-whitespace>•<<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code> 
 * ----------- 5 -----------
 *   --Itemset--
 *     <opt-whitespace>-> •<opt-whitespace>
 *    +<opt-whitespace>->• <opt-whitespace>
 *    +<opt-whitespace>->•(prio:-1)
 *   --Transitions--
 *    Goto on <opt-whitespace> to 8 because of <opt-whitespace>-> •<opt-whitespace>
 *    Shift on   to 5 because of <opt-whitespace>->• <opt-whitespace> 
 *    Reduce on < using <opt-whitespace>-> 
 *    Reduce on ::= using <opt-whitespace>-> 
 *    Reduce on <EOL> using <opt-whitespace>-> 
 *    Reduce on | using <opt-whitespace>-> 
 *    Reduce on "" using <opt-whitespace>-> 
 *    Reduce on " using <opt-whitespace>-> 
 *    Reduce on ' using <opt-whitespace>-> 
 * ----------- 6 -----------
 *   --Itemset--
 *     <syntax>-><syntax><rule>•
 *   --Transitions--
 *    Reduce on < using <syntax>-><syntax><rule> 
 *    Reduce on   using <syntax>-><syntax><rule> 
 *    Reduce on  using <syntax>-><syntax><rule> 
 * ----------- 7 -----------
 *   --Itemset--
 *     <rule>-><opt-whitespace><•<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
 *    +<rule-name>->•<unquoted-text>
 *    +<unquoted-text>->•<text-terminal>
 *    +<unquoted-text>->•<quoted-character>
 *    +<unquoted-text>->•<unquoted-text><text-terminal>
 *    +<unquoted-text>->•<unquoted-text><quoted-character>
 *   --Transitions--
 *    Goto on <rule-name> to 9 because of <rule>-><opt-whitespace><•<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
 *    Goto on <unquoted-text> to 10 because of <rule-name>->•<unquoted-text>
 *    Shift on <text-terminal> to 11 because of <unquoted-text>->•<text-terminal> 
 *    Shift on <quoted-character> to 12 because of <unquoted-text>->•<quoted-character> 
 *    Goto on <unquoted-text> to 10 because of <unquoted-text>->•<unquoted-text><text-terminal>
 *    Goto on <unquoted-text> to 10 because of <unquoted-text>->•<unquoted-text><quoted-character>
 * ----------- 8 -----------
 *   --Itemset--
 *     <opt-whitespace>-> <opt-whitespace>•
 *   --Transitions--
 *    Reduce on < using <opt-whitespace>-> <opt-whitespace> 
 *    Reduce on ::= using <opt-whitespace>-> <opt-whitespace> 
 *    Reduce on <EOL> using <opt-whitespace>-> <opt-whitespace> 
 *    Reduce on | using <opt-whitespace>-> <opt-whitespace> 
 *    Reduce on "" using <opt-whitespace>-> <opt-whitespace> 
 *    Reduce on " using <opt-whitespace>-> <opt-whitespace> 
 *    Reduce on ' using <opt-whitespace>-> <opt-whitespace> 
 * ----------- 9 -----------
 *   --Itemset--
 *     <rule>-><opt-whitespace><<rule-name>•><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
 *   --Transitions--
 *    Shift on > to 13 because of <rule>-><opt-whitespace><<rule-name>•><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code> 
 * ----------- 10 -----------
 *   --Itemset--
 *     <rule-name>-><unquoted-text>•
 *     <unquoted-text>-><unquoted-text>•<text-terminal>
 *     <unquoted-text>-><unquoted-text>•<quoted-character>
 *   --Transitions--
 *    Reduce on > using <rule-name>-><unquoted-text> 
 *    Shift on <text-terminal> to 14 because of <unquoted-text>-><unquoted-text>•<text-terminal> 
 *    Shift on <quoted-character> to 15 because of <unquoted-text>-><unquoted-text>•<quoted-character> 
 * ----------- 11 -----------
 *   --Itemset--
 *     <unquoted-text>-><text-terminal>•
 *   --Transitions--
 *    Reduce on > using <unquoted-text>-><text-terminal> 
 *    Reduce on ) using <unquoted-text>-><text-terminal> 
 *    Reduce on <text-terminal> using <unquoted-text>-><text-terminal> 
 *    Reduce on <quoted-character> using <unquoted-text>-><text-terminal> 
 * ----------- 12 -----------
 *   --Itemset--
 *     <unquoted-text>-><quoted-character>•
 *   --Transitions--
 *    Reduce on > using <unquoted-text>-><quoted-character> 
 *    Reduce on ) using <unquoted-text>-><quoted-character> 
 *    Reduce on <text-terminal> using <unquoted-text>-><quoted-character> 
 *    Reduce on <quoted-character> using <unquoted-text>-><quoted-character> 
 * ----------- 13 -----------
 *   --Itemset--
 *     <rule>-><opt-whitespace><<rule-name>>•<rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
 *    +<rule-priority>->•<opt-whitespace>
 *    +<rule-priority>->•(<unquoted-text>)<opt-whitespace>
 *    +<opt-whitespace>->• <opt-whitespace>
 *    +<opt-whitespace>->•(prio:-1)
 *   --Transitions--
 *    Goto on <rule-priority> to 16 because of <rule>-><opt-whitespace><<rule-name>>•<rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
 *    Goto on <opt-whitespace> to 17 because of <rule-priority>->•<opt-whitespace>
 *    Shift on ( to 18 because of <rule-priority>->•(<unquoted-text>)<opt-whitespace> 
 *    Shift on   to 5 because of <opt-whitespace>->• <opt-whitespace> 
 *    Reduce on < using <opt-whitespace>-> 
 *    Reduce on ::= using <opt-whitespace>-> 
 *    Reduce on <EOL> using <opt-whitespace>-> 
 *    Reduce on | using <opt-whitespace>-> 
 *    Reduce on "" using <opt-whitespace>-> 
 *    Reduce on " using <opt-whitespace>-> 
 *    Reduce on ' using <opt-whitespace>-> 
 * ----------- 14 -----------
 *   --Itemset--
 *     <unquoted-text>-><unquoted-text><text-terminal>•
 *   --Transitions--
 *    Reduce on > using <unquoted-text>-><unquoted-text><text-terminal> 
 *    Reduce on ) using <unquoted-text>-><unquoted-text><text-terminal> 
 *    Reduce on <text-terminal> using <unquoted-text>-><unquoted-text><text-terminal> 
 *    Reduce on <quoted-character> using <unquoted-text>-><unquoted-text><text-terminal> 
 * ----------- 15 -----------
 *   --Itemset--
 *     <unquoted-text>-><unquoted-text><quoted-character>•
 *   --Transitions--
 *    Reduce on > using <unquoted-text>-><unquoted-text><quoted-character> 
 *    Reduce on ) using <unquoted-text>-><unquoted-text><quoted-character> 
 *    Reduce on <text-terminal> using <unquoted-text>-><unquoted-text><quoted-character> 
 *    Reduce on <quoted-character> using <unquoted-text>-><unquoted-text><quoted-character> 
 * ----------- 16 -----------
 *   --Itemset--
 *     <rule>-><opt-whitespace><<rule-name>><rule-priority>•::=<opt-whitespace><expression><line-end><reduction-code>
 *   --Transitions--
 *    Shift on ::= to 19 because of <rule>-><opt-whitespace><<rule-name>><rule-priority>•::=<opt-whitespace><expression><line-end><reduction-code> 
 * ----------- 17 -----------
 *   --Itemset--
 *     <rule-priority>-><opt-whitespace>•
 *   --Transitions--
 *    Reduce on ::= using <rule-priority>-><opt-whitespace> 
 * ----------- 18 -----------
 *   --Itemset--
 *     <rule-priority>->(•<unquoted-text>)<opt-whitespace>
 *    +<unquoted-text>->•<text-terminal>
 *    +<unquoted-text>->•<quoted-character>
 *    +<unquoted-text>->•<unquoted-text><text-terminal>
 *    +<unquoted-text>->•<unquoted-text><quoted-character>
 *   --Transitions--
 *    Goto on <unquoted-text> to 20 because of <rule-priority>->(•<unquoted-text>)<opt-whitespace>
 *    Shift on <text-terminal> to 11 because of <unquoted-text>->•<text-terminal> 
 *    Shift on <quoted-character> to 12 because of <unquoted-text>->•<quoted-character> 
 *    Goto on <unquoted-text> to 20 because of <unquoted-text>->•<unquoted-text><text-terminal>
 *    Goto on <unquoted-text> to 20 because of <unquoted-text>->•<unquoted-text><quoted-character>
 * ----------- 19 -----------
 *   --Itemset--
 *     <rule>-><opt-whitespace><<rule-name>><rule-priority>::=•<opt-whitespace><expression><line-end><reduction-code>
 *    +<opt-whitespace>->• <opt-whitespace>
 *    +<opt-whitespace>->•(prio:-1)
 *   --Transitions--
 *    Goto on <opt-whitespace> to 21 because of <rule>-><opt-whitespace><<rule-name>><rule-priority>::=•<opt-whitespace><expression><line-end><reduction-code>
 *    Shift on   to 5 because of <opt-whitespace>->• <opt-whitespace> 
 *    Reduce on < using <opt-whitespace>-> 
 *    Reduce on ::= using <opt-whitespace>-> 
 *    Reduce on <EOL> using <opt-whitespace>-> 
 *    Reduce on | using <opt-whitespace>-> 
 *    Reduce on "" using <opt-whitespace>-> 
 *    Reduce on " using <opt-whitespace>-> 
 *    Reduce on ' using <opt-whitespace>-> 
 * ----------- 20 -----------
 *   --Itemset--
 *     <rule-priority>->(<unquoted-text>•)<opt-whitespace>
 *     <unquoted-text>-><unquoted-text>•<text-terminal>
 *     <unquoted-text>-><unquoted-text>•<quoted-character>
 *   --Transitions--
 *    Shift on ) to 22 because of <rule-priority>->(<unquoted-text>•)<opt-whitespace> 
 *    Shift on <text-terminal> to 14 because of <unquoted-text>-><unquoted-text>•<text-terminal> 
 *    Shift on <quoted-character> to 15 because of <unquoted-text>-><unquoted-text>•<quoted-character> 
 * ----------- 21 -----------
 *   --Itemset--
 *     <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace>•<expression><line-end><reduction-code>
 *    +<expression>->•<list>
 *    +<expression>->•<expression><opt-whitespace>|<opt-whitespace><list>
 *    +<list>->•<term>
 *    +<list>->•<list><opt-whitespace><term>
 *    +<term>->•<named-term>
 *    +<term>->•<unnamed-term>
 *    +<named-term>->•<unnamed-term>(<unquoted-text>)
 *    +<unnamed-term>->•<literal>
 *    +<unnamed-term>->•<<rule-name>>
 *    +<unnamed-term>->•""
 *    +<literal>->•"<double-quoted-text>"
 *    +<literal>->•'<single-quoted-text>'
 *   --Transitions--
 *    Goto on <expression> to 23 because of <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace>•<expression><line-end><reduction-code>
 *    Goto on <list> to 24 because of <expression>->•<list>
 *    Goto on <expression> to 23 because of <expression>->•<expression><opt-whitespace>|<opt-whitespace><list>
 *    Goto on <term> to 25 because of <list>->•<term>
 *    Goto on <list> to 24 because of <list>->•<list><opt-whitespace><term>
 *    Goto on <named-term> to 26 because of <term>->•<named-term>
 *    Goto on <unnamed-term> to 27 because of <term>->•<unnamed-term>
 *    Goto on <unnamed-term> to 27 because of <named-term>->•<unnamed-term>(<unquoted-text>)
 *    Goto on <literal> to 28 because of <unnamed-term>->•<literal>
 *    Shift on < to 29 because of <unnamed-term>->•<<rule-name>> 
 *    Shift on "" to 30 because of <unnamed-term>->•"" 
 *    Shift on " to 31 because of <literal>->•"<double-quoted-text>" 
 *    Shift on ' to 32 because of <literal>->•'<single-quoted-text>' 
 * ----------- 22 -----------
 *   --Itemset--
 *     <rule-priority>->(<unquoted-text>)•<opt-whitespace>
 *    +<opt-whitespace>->• <opt-whitespace>
 *    +<opt-whitespace>->•(prio:-1)
 *   --Transitions--
 *    Goto on <opt-whitespace> to 33 because of <rule-priority>->(<unquoted-text>)•<opt-whitespace>
 *    Shift on   to 5 because of <opt-whitespace>->• <opt-whitespace> 
 *    Reduce on < using <opt-whitespace>-> 
 *    Reduce on ::= using <opt-whitespace>-> 
 *    Reduce on <EOL> using <opt-whitespace>-> 
 *    Reduce on | using <opt-whitespace>-> 
 *    Reduce on "" using <opt-whitespace>-> 
 *    Reduce on " using <opt-whitespace>-> 
 *    Reduce on ' using <opt-whitespace>-> 
 * ----------- 23 -----------
 *   --Itemset--
 *     <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression>•<line-end><reduction-code>
 *     <expression>-><expression>•<opt-whitespace>|<opt-whitespace><list>
 *    +<line-end>->•<opt-whitespace><EOL>
 *    +<line-end>->•<line-end><EOL>
 *    +<opt-whitespace>->• <opt-whitespace>
 *    +<opt-whitespace>->•(prio:-1)
 *   --Transitions--
 *    Goto on <line-end> to 34 because of <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression>•<line-end><reduction-code>
 *    Goto on <opt-whitespace> to 35 because of <expression>-><expression>•<opt-whitespace>|<opt-whitespace><list>
 *    Goto on <opt-whitespace> to 35 because of <line-end>->•<opt-whitespace><EOL>
 *    Goto on <line-end> to 34 because of <line-end>->•<line-end><EOL>
 *    Shift on   to 5 because of <opt-whitespace>->• <opt-whitespace> 
 *    Reduce on < using <opt-whitespace>-> 
 *    Reduce on ::= using <opt-whitespace>-> 
 *    Reduce on <EOL> using <opt-whitespace>-> 
 *    Reduce on | using <opt-whitespace>-> 
 *    Reduce on "" using <opt-whitespace>-> 
 *    Reduce on " using <opt-whitespace>-> 
 *    Reduce on ' using <opt-whitespace>-> 
 * ----------- 24 -----------
 *   --Itemset--
 *     <expression>-><list>•
 *     <list>-><list>•<opt-whitespace><term>
 *    +<opt-whitespace>->• <opt-whitespace>
 *    +<opt-whitespace>->•(prio:-1)
 *   --Transitions--
 *    Reduce on <EOL> using <expression>-><list> 
 *    Reduce on   using <expression>-><list> {  , <EOL>, | }
 *    Reduce on | using <expression>-><list> 
 *    Goto on <opt-whitespace> to 36 because of <list>-><list>•<opt-whitespace><term>
 *    Shift on   to 5 because of <opt-whitespace>->• <opt-whitespace> { ", ', <, "" }
 * ----------- 25 -----------
 *   --Itemset--
 *     <list>-><term>•
 *   --Transitions--
 *    Reduce on < using <list>-><term> 
 *    Reduce on <EOL> using <list>-><term> 
 *    Reduce on   using <list>-><term> 
 *    Reduce on | using <list>-><term> 
 *    Reduce on "" using <list>-><term> 
 *    Reduce on " using <list>-><term> 
 *    Reduce on ' using <list>-><term> 
 * ----------- 26 -----------
 *   --Itemset--
 *     <term>-><named-term>•
 *   --Transitions--
 *    Reduce on < using <term>-><named-term> 
 *    Reduce on <EOL> using <term>-><named-term> 
 *    Reduce on   using <term>-><named-term> 
 *    Reduce on | using <term>-><named-term> 
 *    Reduce on "" using <term>-><named-term> 
 *    Reduce on " using <term>-><named-term> 
 *    Reduce on ' using <term>-><named-term> 
 * ----------- 27 -----------
 *   --Itemset--
 *     <term>-><unnamed-term>•
 *     <named-term>-><unnamed-term>•(<unquoted-text>)
 *   --Transitions--
 *    Reduce on < using <term>-><unnamed-term> 
 *    Reduce on <EOL> using <term>-><unnamed-term> 
 *    Reduce on   using <term>-><unnamed-term> 
 *    Reduce on | using <term>-><unnamed-term> 
 *    Reduce on "" using <term>-><unnamed-term> 
 *    Reduce on " using <term>-><unnamed-term> 
 *    Reduce on ' using <term>-><unnamed-term> 
 *    Shift on ( to 37 because of <named-term>-><unnamed-term>•(<unquoted-text>) 
 * ----------- 28 -----------
 *   --Itemset--
 *     <unnamed-term>-><literal>•
 *   --Transitions--
 *    Reduce on < using <unnamed-term>-><literal> 
 *    Reduce on ( using <unnamed-term>-><literal> 
 *    Reduce on <EOL> using <unnamed-term>-><literal> 
 *    Reduce on   using <unnamed-term>-><literal> 
 *    Reduce on | using <unnamed-term>-><literal> 
 *    Reduce on "" using <unnamed-term>-><literal> 
 *    Reduce on " using <unnamed-term>-><literal> 
 *    Reduce on ' using <unnamed-term>-><literal> 
 * ----------- 29 -----------
 *   --Itemset--
 *     <unnamed-term>-><•<rule-name>>
 *    +<rule-name>->•<unquoted-text>
 *    +<unquoted-text>->•<text-terminal>
 *    +<unquoted-text>->•<quoted-character>
 *    +<unquoted-text>->•<unquoted-text><text-terminal>
 *    +<unquoted-text>->•<unquoted-text><quoted-character>
 *   --Transitions--
 *    Goto on <rule-name> to 38 because of <unnamed-term>-><•<rule-name>>
 *    Goto on <unquoted-text> to 10 because of <rule-name>->•<unquoted-text>
 *    Shift on <text-terminal> to 11 because of <unquoted-text>->•<text-terminal> 
 *    Shift on <quoted-character> to 12 because of <unquoted-text>->•<quoted-character> 
 *    Goto on <unquoted-text> to 10 because of <unquoted-text>->•<unquoted-text><text-terminal>
 *    Goto on <unquoted-text> to 10 because of <unquoted-text>->•<unquoted-text><quoted-character>
 * ----------- 30 -----------
 *   --Itemset--
 *     <unnamed-term>->""•
 *   --Transitions--
 *    Reduce on < using <unnamed-term>->"" 
 *    Reduce on ( using <unnamed-term>->"" 
 *    Reduce on <EOL> using <unnamed-term>->"" 
 *    Reduce on   using <unnamed-term>->"" 
 *    Reduce on | using <unnamed-term>->"" 
 *    Reduce on "" using <unnamed-term>->"" 
 *    Reduce on " using <unnamed-term>->"" 
 *    Reduce on ' using <unnamed-term>->"" 
 * ----------- 31 -----------
 *   --Itemset--
 *     <literal>->"•<double-quoted-text>"
 *    +<double-quoted-text>->•<quoted-text-part>
 *    +<double-quoted-text>->•'
 *    +<double-quoted-text>->•<double-quoted-text><quoted-text-part>
 *    +<double-quoted-text>->•<double-quoted-text>'
 *    +<quoted-text-part>->•<text-terminal>
 *    +<quoted-text-part>->•<quoted-character>
 *    +<quoted-text-part>->•>>>
 *    +<quoted-text-part>->•<<<
 *    +<quoted-text-part>->•(
 *    +<quoted-text-part>->•)
 *    +<quoted-text-part>->• 
 *    +<quoted-text-part>->•<
 *    +<quoted-text-part>->•>
 *    +<quoted-text-part>->•|
 *    +<quoted-text-part>->•::=
 *    +<quoted-text-part>->•""
 *   --Transitions--
 *    Goto on <double-quoted-text> to 39 because of <literal>->"•<double-quoted-text>"
 *    Goto on <quoted-text-part> to 40 because of <double-quoted-text>->•<quoted-text-part>
 *    Shift on ' to 41 because of <double-quoted-text>->•' 
 *    Goto on <double-quoted-text> to 39 because of <double-quoted-text>->•<double-quoted-text><quoted-text-part>
 *    Goto on <double-quoted-text> to 39 because of <double-quoted-text>->•<double-quoted-text>'
 *    Shift on <text-terminal> to 42 because of <quoted-text-part>->•<text-terminal> 
 *    Shift on <quoted-character> to 43 because of <quoted-text-part>->•<quoted-character> 
 *    Shift on >>> to 44 because of <quoted-text-part>->•>>> 
 *    Shift on <<< to 45 because of <quoted-text-part>->•<<< 
 *    Shift on ( to 46 because of <quoted-text-part>->•( 
 *    Shift on ) to 47 because of <quoted-text-part>->•) 
 *    Shift on   to 48 because of <quoted-text-part>->•  
 *    Shift on < to 49 because of <quoted-text-part>->•< 
 *    Shift on > to 50 because of <quoted-text-part>->•> 
 *    Shift on | to 51 because of <quoted-text-part>->•| 
 *    Shift on ::= to 52 because of <quoted-text-part>->•::= 
 *    Shift on "" to 53 because of <quoted-text-part>->•"" 
 * ----------- 32 -----------
 *   --Itemset--
 *     <literal>->'•<single-quoted-text>'
 *    +<single-quoted-text>->•<quoted-text-part>
 *    +<single-quoted-text>->•"
 *    +<single-quoted-text>->•<single-quoted-text><quoted-text-part>
 *    +<single-quoted-text>->•<single-quoted-text>"
 *    +<quoted-text-part>->•<text-terminal>
 *    +<quoted-text-part>->•<quoted-character>
 *    +<quoted-text-part>->•>>>
 *    +<quoted-text-part>->•<<<
 *    +<quoted-text-part>->•(
 *    +<quoted-text-part>->•)
 *    +<quoted-text-part>->• 
 *    +<quoted-text-part>->•<
 *    +<quoted-text-part>->•>
 *    +<quoted-text-part>->•|
 *    +<quoted-text-part>->•::=
 *    +<quoted-text-part>->•""
 *   --Transitions--
 *    Goto on <single-quoted-text> to 54 because of <literal>->'•<single-quoted-text>'
 *    Goto on <quoted-text-part> to 55 because of <single-quoted-text>->•<quoted-text-part>
 *    Shift on " to 56 because of <single-quoted-text>->•" 
 *    Goto on <single-quoted-text> to 54 because of <single-quoted-text>->•<single-quoted-text><quoted-text-part>
 *    Goto on <single-quoted-text> to 54 because of <single-quoted-text>->•<single-quoted-text>"
 *    Shift on <text-terminal> to 42 because of <quoted-text-part>->•<text-terminal> 
 *    Shift on <quoted-character> to 43 because of <quoted-text-part>->•<quoted-character> 
 *    Shift on >>> to 44 because of <quoted-text-part>->•>>> 
 *    Shift on <<< to 45 because of <quoted-text-part>->•<<< 
 *    Shift on ( to 46 because of <quoted-text-part>->•( 
 *    Shift on ) to 47 because of <quoted-text-part>->•) 
 *    Shift on   to 48 because of <quoted-text-part>->•  
 *    Shift on < to 49 because of <quoted-text-part>->•< 
 *    Shift on > to 50 because of <quoted-text-part>->•> 
 *    Shift on | to 51 because of <quoted-text-part>->•| 
 *    Shift on ::= to 52 because of <quoted-text-part>->•::= 
 *    Shift on "" to 53 because of <quoted-text-part>->•"" 
 * ----------- 33 -----------
 *   --Itemset--
 *     <rule-priority>->(<unquoted-text>)<opt-whitespace>•
 *   --Transitions--
 *    Reduce on ::= using <rule-priority>->(<unquoted-text>)<opt-whitespace> 
 * ----------- 34 -----------
 *   --Itemset--
 *     <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end>•<reduction-code>
 *     <line-end>-><line-end>•<EOL>
 *    +<reduction-code>->•<<<<EOL><reduction-code-text><EOL>>>><line-end>
 *    +<reduction-code>->•
 *   --Transitions--
 *    Goto on <reduction-code> to 57 because of <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end>•<reduction-code>
 *    Shift on <EOL> to 58 because of <line-end>-><line-end>•<EOL> 
 *    Shift on <<< to 59 because of <reduction-code>->•<<<<EOL><reduction-code-text><EOL>>>><line-end> 
 *    Reduce on < using <reduction-code>-> 
 *    Reduce on   using <reduction-code>-> 
 *    Reduce on  using <reduction-code>-> 
 * ----------- 35 -----------
 *   --Itemset--
 *     <expression>-><expression><opt-whitespace>•|<opt-whitespace><list>
 *     <line-end>-><opt-whitespace>•<EOL>
 *   --Transitions--
 *    Shift on | to 60 because of <expression>-><expression><opt-whitespace>•|<opt-whitespace><list> 
 *    Shift on <EOL> to 61 because of <line-end>-><opt-whitespace>•<EOL> 
 * ----------- 36 -----------
 *   --Itemset--
 *     <list>-><list><opt-whitespace>•<term>
 *    +<term>->•<named-term>
 *    +<term>->•<unnamed-term>
 *    +<named-term>->•<unnamed-term>(<unquoted-text>)
 *    +<unnamed-term>->•<literal>
 *    +<unnamed-term>->•<<rule-name>>
 *    +<unnamed-term>->•""
 *    +<literal>->•"<double-quoted-text>"
 *    +<literal>->•'<single-quoted-text>'
 *   --Transitions--
 *    Goto on <term> to 62 because of <list>-><list><opt-whitespace>•<term>
 *    Goto on <named-term> to 26 because of <term>->•<named-term>
 *    Goto on <unnamed-term> to 27 because of <term>->•<unnamed-term>
 *    Goto on <unnamed-term> to 27 because of <named-term>->•<unnamed-term>(<unquoted-text>)
 *    Goto on <literal> to 28 because of <unnamed-term>->•<literal>
 *    Shift on < to 29 because of <unnamed-term>->•<<rule-name>> 
 *    Shift on "" to 30 because of <unnamed-term>->•"" 
 *    Shift on " to 31 because of <literal>->•"<double-quoted-text>" 
 *    Shift on ' to 32 because of <literal>->•'<single-quoted-text>' 
 * ----------- 37 -----------
 *   --Itemset--
 *     <named-term>-><unnamed-term>(•<unquoted-text>)
 *    +<unquoted-text>->•<text-terminal>
 *    +<unquoted-text>->•<quoted-character>
 *    +<unquoted-text>->•<unquoted-text><text-terminal>
 *    +<unquoted-text>->•<unquoted-text><quoted-character>
 *   --Transitions--
 *    Goto on <unquoted-text> to 63 because of <named-term>-><unnamed-term>(•<unquoted-text>)
 *    Shift on <text-terminal> to 11 because of <unquoted-text>->•<text-terminal> 
 *    Shift on <quoted-character> to 12 because of <unquoted-text>->•<quoted-character> 
 *    Goto on <unquoted-text> to 63 because of <unquoted-text>->•<unquoted-text><text-terminal>
 *    Goto on <unquoted-text> to 63 because of <unquoted-text>->•<unquoted-text><quoted-character>
 * ----------- 38 -----------
 *   --Itemset--
 *     <unnamed-term>-><<rule-name>•>
 *   --Transitions--
 *    Shift on > to 64 because of <unnamed-term>-><<rule-name>•> 
 * ----------- 39 -----------
 *   --Itemset--
 *     <literal>->"<double-quoted-text>•"
 *     <double-quoted-text>-><double-quoted-text>•<quoted-text-part>
 *     <double-quoted-text>-><double-quoted-text>•'
 *    +<quoted-text-part>->•<text-terminal>
 *    +<quoted-text-part>->•<quoted-character>
 *    +<quoted-text-part>->•>>>
 *    +<quoted-text-part>->•<<<
 *    +<quoted-text-part>->•(
 *    +<quoted-text-part>->•)
 *    +<quoted-text-part>->• 
 *    +<quoted-text-part>->•<
 *    +<quoted-text-part>->•>
 *    +<quoted-text-part>->•|
 *    +<quoted-text-part>->•::=
 *    +<quoted-text-part>->•""
 *   --Transitions--
 *    Shift on " to 65 because of <literal>->"<double-quoted-text>•" 
 *    Goto on <quoted-text-part> to 66 because of <double-quoted-text>-><double-quoted-text>•<quoted-text-part>
 *    Shift on ' to 67 because of <double-quoted-text>-><double-quoted-text>•' 
 *    Shift on <text-terminal> to 42 because of <quoted-text-part>->•<text-terminal> 
 *    Shift on <quoted-character> to 43 because of <quoted-text-part>->•<quoted-character> 
 *    Shift on >>> to 44 because of <quoted-text-part>->•>>> 
 *    Shift on <<< to 45 because of <quoted-text-part>->•<<< 
 *    Shift on ( to 46 because of <quoted-text-part>->•( 
 *    Shift on ) to 47 because of <quoted-text-part>->•) 
 *    Shift on   to 48 because of <quoted-text-part>->•  
 *    Shift on < to 49 because of <quoted-text-part>->•< 
 *    Shift on > to 50 because of <quoted-text-part>->•> 
 *    Shift on | to 51 because of <quoted-text-part>->•| 
 *    Shift on ::= to 52 because of <quoted-text-part>->•::= 
 *    Shift on "" to 53 because of <quoted-text-part>->•"" 
 * ----------- 40 -----------
 *   --Itemset--
 *     <double-quoted-text>-><quoted-text-part>•
 *   --Transitions--
 *    Reduce on < using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on > using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on ::= using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on ( using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on ) using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on   using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on | using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on "" using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on " using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on ' using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on <text-terminal> using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on <quoted-character> using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on >>> using <double-quoted-text>-><quoted-text-part> 
 *    Reduce on <<< using <double-quoted-text>-><quoted-text-part> 
 * ----------- 41 -----------
 *   --Itemset--
 *     <double-quoted-text>->'•
 *   --Transitions--
 *    Reduce on < using <double-quoted-text>->' 
 *    Reduce on > using <double-quoted-text>->' 
 *    Reduce on ::= using <double-quoted-text>->' 
 *    Reduce on ( using <double-quoted-text>->' 
 *    Reduce on ) using <double-quoted-text>->' 
 *    Reduce on   using <double-quoted-text>->' 
 *    Reduce on | using <double-quoted-text>->' 
 *    Reduce on "" using <double-quoted-text>->' 
 *    Reduce on " using <double-quoted-text>->' 
 *    Reduce on ' using <double-quoted-text>->' 
 *    Reduce on <text-terminal> using <double-quoted-text>->' 
 *    Reduce on <quoted-character> using <double-quoted-text>->' 
 *    Reduce on >>> using <double-quoted-text>->' 
 *    Reduce on <<< using <double-quoted-text>->' 
 * ----------- 42 -----------
 *   --Itemset--
 *     <quoted-text-part>-><text-terminal>•
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>-><text-terminal> 
 *    Reduce on > using <quoted-text-part>-><text-terminal> 
 *    Reduce on ::= using <quoted-text-part>-><text-terminal> 
 *    Reduce on ( using <quoted-text-part>-><text-terminal> 
 *    Reduce on ) using <quoted-text-part>-><text-terminal> 
 *    Reduce on   using <quoted-text-part>-><text-terminal> 
 *    Reduce on | using <quoted-text-part>-><text-terminal> 
 *    Reduce on "" using <quoted-text-part>-><text-terminal> 
 *    Reduce on " using <quoted-text-part>-><text-terminal> 
 *    Reduce on ' using <quoted-text-part>-><text-terminal> 
 *    Reduce on <text-terminal> using <quoted-text-part>-><text-terminal> 
 *    Reduce on <quoted-character> using <quoted-text-part>-><text-terminal> 
 *    Reduce on >>> using <quoted-text-part>-><text-terminal> 
 *    Reduce on <<< using <quoted-text-part>-><text-terminal> 
 * ----------- 43 -----------
 *   --Itemset--
 *     <quoted-text-part>-><quoted-character>•
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>-><quoted-character> 
 *    Reduce on > using <quoted-text-part>-><quoted-character> 
 *    Reduce on ::= using <quoted-text-part>-><quoted-character> 
 *    Reduce on ( using <quoted-text-part>-><quoted-character> 
 *    Reduce on ) using <quoted-text-part>-><quoted-character> 
 *    Reduce on   using <quoted-text-part>-><quoted-character> 
 *    Reduce on | using <quoted-text-part>-><quoted-character> 
 *    Reduce on "" using <quoted-text-part>-><quoted-character> 
 *    Reduce on " using <quoted-text-part>-><quoted-character> 
 *    Reduce on ' using <quoted-text-part>-><quoted-character> 
 *    Reduce on <text-terminal> using <quoted-text-part>-><quoted-character> 
 *    Reduce on <quoted-character> using <quoted-text-part>-><quoted-character> 
 *    Reduce on >>> using <quoted-text-part>-><quoted-character> 
 *    Reduce on <<< using <quoted-text-part>-><quoted-character> 
 * ----------- 44 -----------
 *   --Itemset--
 *     <quoted-text-part>->>>>•
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>->>>> 
 *    Reduce on > using <quoted-text-part>->>>> 
 *    Reduce on ::= using <quoted-text-part>->>>> 
 *    Reduce on ( using <quoted-text-part>->>>> 
 *    Reduce on ) using <quoted-text-part>->>>> 
 *    Reduce on   using <quoted-text-part>->>>> 
 *    Reduce on | using <quoted-text-part>->>>> 
 *    Reduce on "" using <quoted-text-part>->>>> 
 *    Reduce on " using <quoted-text-part>->>>> 
 *    Reduce on ' using <quoted-text-part>->>>> 
 *    Reduce on <text-terminal> using <quoted-text-part>->>>> 
 *    Reduce on <quoted-character> using <quoted-text-part>->>>> 
 *    Reduce on >>> using <quoted-text-part>->>>> 
 *    Reduce on <<< using <quoted-text-part>->>>> 
 * ----------- 45 -----------
 *   --Itemset--
 *     <quoted-text-part>-><<<•
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>-><<< 
 *    Reduce on > using <quoted-text-part>-><<< 
 *    Reduce on ::= using <quoted-text-part>-><<< 
 *    Reduce on ( using <quoted-text-part>-><<< 
 *    Reduce on ) using <quoted-text-part>-><<< 
 *    Reduce on   using <quoted-text-part>-><<< 
 *    Reduce on | using <quoted-text-part>-><<< 
 *    Reduce on "" using <quoted-text-part>-><<< 
 *    Reduce on " using <quoted-text-part>-><<< 
 *    Reduce on ' using <quoted-text-part>-><<< 
 *    Reduce on <text-terminal> using <quoted-text-part>-><<< 
 *    Reduce on <quoted-character> using <quoted-text-part>-><<< 
 *    Reduce on >>> using <quoted-text-part>-><<< 
 *    Reduce on <<< using <quoted-text-part>-><<< 
 * ----------- 46 -----------
 *   --Itemset--
 *     <quoted-text-part>->(•
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>->( 
 *    Reduce on > using <quoted-text-part>->( 
 *    Reduce on ::= using <quoted-text-part>->( 
 *    Reduce on ( using <quoted-text-part>->( 
 *    Reduce on ) using <quoted-text-part>->( 
 *    Reduce on   using <quoted-text-part>->( 
 *    Reduce on | using <quoted-text-part>->( 
 *    Reduce on "" using <quoted-text-part>->( 
 *    Reduce on " using <quoted-text-part>->( 
 *    Reduce on ' using <quoted-text-part>->( 
 *    Reduce on <text-terminal> using <quoted-text-part>->( 
 *    Reduce on <quoted-character> using <quoted-text-part>->( 
 *    Reduce on >>> using <quoted-text-part>->( 
 *    Reduce on <<< using <quoted-text-part>->( 
 * ----------- 47 -----------
 *   --Itemset--
 *     <quoted-text-part>->)•
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>->) 
 *    Reduce on > using <quoted-text-part>->) 
 *    Reduce on ::= using <quoted-text-part>->) 
 *    Reduce on ( using <quoted-text-part>->) 
 *    Reduce on ) using <quoted-text-part>->) 
 *    Reduce on   using <quoted-text-part>->) 
 *    Reduce on | using <quoted-text-part>->) 
 *    Reduce on "" using <quoted-text-part>->) 
 *    Reduce on " using <quoted-text-part>->) 
 *    Reduce on ' using <quoted-text-part>->) 
 *    Reduce on <text-terminal> using <quoted-text-part>->) 
 *    Reduce on <quoted-character> using <quoted-text-part>->) 
 *    Reduce on >>> using <quoted-text-part>->) 
 *    Reduce on <<< using <quoted-text-part>->) 
 * ----------- 48 -----------
 *   --Itemset--
 *     <quoted-text-part>-> •
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>->  
 *    Reduce on > using <quoted-text-part>->  
 *    Reduce on ::= using <quoted-text-part>->  
 *    Reduce on ( using <quoted-text-part>->  
 *    Reduce on ) using <quoted-text-part>->  
 *    Reduce on   using <quoted-text-part>->  
 *    Reduce on | using <quoted-text-part>->  
 *    Reduce on "" using <quoted-text-part>->  
 *    Reduce on " using <quoted-text-part>->  
 *    Reduce on ' using <quoted-text-part>->  
 *    Reduce on <text-terminal> using <quoted-text-part>->  
 *    Reduce on <quoted-character> using <quoted-text-part>->  
 *    Reduce on >>> using <quoted-text-part>->  
 *    Reduce on <<< using <quoted-text-part>->  
 * ----------- 49 -----------
 *   --Itemset--
 *     <quoted-text-part>-><•
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>->< 
 *    Reduce on > using <quoted-text-part>->< 
 *    Reduce on ::= using <quoted-text-part>->< 
 *    Reduce on ( using <quoted-text-part>->< 
 *    Reduce on ) using <quoted-text-part>->< 
 *    Reduce on   using <quoted-text-part>->< 
 *    Reduce on | using <quoted-text-part>->< 
 *    Reduce on "" using <quoted-text-part>->< 
 *    Reduce on " using <quoted-text-part>->< 
 *    Reduce on ' using <quoted-text-part>->< 
 *    Reduce on <text-terminal> using <quoted-text-part>->< 
 *    Reduce on <quoted-character> using <quoted-text-part>->< 
 *    Reduce on >>> using <quoted-text-part>->< 
 *    Reduce on <<< using <quoted-text-part>->< 
 * ----------- 50 -----------
 *   --Itemset--
 *     <quoted-text-part>->>•
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>->> 
 *    Reduce on > using <quoted-text-part>->> 
 *    Reduce on ::= using <quoted-text-part>->> 
 *    Reduce on ( using <quoted-text-part>->> 
 *    Reduce on ) using <quoted-text-part>->> 
 *    Reduce on   using <quoted-text-part>->> 
 *    Reduce on | using <quoted-text-part>->> 
 *    Reduce on "" using <quoted-text-part>->> 
 *    Reduce on " using <quoted-text-part>->> 
 *    Reduce on ' using <quoted-text-part>->> 
 *    Reduce on <text-terminal> using <quoted-text-part>->> 
 *    Reduce on <quoted-character> using <quoted-text-part>->> 
 *    Reduce on >>> using <quoted-text-part>->> 
 *    Reduce on <<< using <quoted-text-part>->> 
 * ----------- 51 -----------
 *   --Itemset--
 *     <quoted-text-part>->|•
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>->| 
 *    Reduce on > using <quoted-text-part>->| 
 *    Reduce on ::= using <quoted-text-part>->| 
 *    Reduce on ( using <quoted-text-part>->| 
 *    Reduce on ) using <quoted-text-part>->| 
 *    Reduce on   using <quoted-text-part>->| 
 *    Reduce on | using <quoted-text-part>->| 
 *    Reduce on "" using <quoted-text-part>->| 
 *    Reduce on " using <quoted-text-part>->| 
 *    Reduce on ' using <quoted-text-part>->| 
 *    Reduce on <text-terminal> using <quoted-text-part>->| 
 *    Reduce on <quoted-character> using <quoted-text-part>->| 
 *    Reduce on >>> using <quoted-text-part>->| 
 *    Reduce on <<< using <quoted-text-part>->| 
 * ----------- 52 -----------
 *   --Itemset--
 *     <quoted-text-part>->::=•
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>->::= 
 *    Reduce on > using <quoted-text-part>->::= 
 *    Reduce on ::= using <quoted-text-part>->::= 
 *    Reduce on ( using <quoted-text-part>->::= 
 *    Reduce on ) using <quoted-text-part>->::= 
 *    Reduce on   using <quoted-text-part>->::= 
 *    Reduce on | using <quoted-text-part>->::= 
 *    Reduce on "" using <quoted-text-part>->::= 
 *    Reduce on " using <quoted-text-part>->::= 
 *    Reduce on ' using <quoted-text-part>->::= 
 *    Reduce on <text-terminal> using <quoted-text-part>->::= 
 *    Reduce on <quoted-character> using <quoted-text-part>->::= 
 *    Reduce on >>> using <quoted-text-part>->::= 
 *    Reduce on <<< using <quoted-text-part>->::= 
 * ----------- 53 -----------
 *   --Itemset--
 *     <quoted-text-part>->""•
 *   --Transitions--
 *    Reduce on < using <quoted-text-part>->"" 
 *    Reduce on > using <quoted-text-part>->"" 
 *    Reduce on ::= using <quoted-text-part>->"" 
 *    Reduce on ( using <quoted-text-part>->"" 
 *    Reduce on ) using <quoted-text-part>->"" 
 *    Reduce on   using <quoted-text-part>->"" 
 *    Reduce on | using <quoted-text-part>->"" 
 *    Reduce on "" using <quoted-text-part>->"" 
 *    Reduce on " using <quoted-text-part>->"" 
 *    Reduce on ' using <quoted-text-part>->"" 
 *    Reduce on <text-terminal> using <quoted-text-part>->"" 
 *    Reduce on <quoted-character> using <quoted-text-part>->"" 
 *    Reduce on >>> using <quoted-text-part>->"" 
 *    Reduce on <<< using <quoted-text-part>->"" 
 * ----------- 54 -----------
 *   --Itemset--
 *     <literal>->'<single-quoted-text>•'
 *     <single-quoted-text>-><single-quoted-text>•<quoted-text-part>
 *     <single-quoted-text>-><single-quoted-text>•"
 *    +<quoted-text-part>->•<text-terminal>
 *    +<quoted-text-part>->•<quoted-character>
 *    +<quoted-text-part>->•>>>
 *    +<quoted-text-part>->•<<<
 *    +<quoted-text-part>->•(
 *    +<quoted-text-part>->•)
 *    +<quoted-text-part>->• 
 *    +<quoted-text-part>->•<
 *    +<quoted-text-part>->•>
 *    +<quoted-text-part>->•|
 *    +<quoted-text-part>->•::=
 *    +<quoted-text-part>->•""
 *   --Transitions--
 *    Shift on ' to 68 because of <literal>->'<single-quoted-text>•' 
 *    Goto on <quoted-text-part> to 69 because of <single-quoted-text>-><single-quoted-text>•<quoted-text-part>
 *    Shift on " to 70 because of <single-quoted-text>-><single-quoted-text>•" 
 *    Shift on <text-terminal> to 42 because of <quoted-text-part>->•<text-terminal> 
 *    Shift on <quoted-character> to 43 because of <quoted-text-part>->•<quoted-character> 
 *    Shift on >>> to 44 because of <quoted-text-part>->•>>> 
 *    Shift on <<< to 45 because of <quoted-text-part>->•<<< 
 *    Shift on ( to 46 because of <quoted-text-part>->•( 
 *    Shift on ) to 47 because of <quoted-text-part>->•) 
 *    Shift on   to 48 because of <quoted-text-part>->•  
 *    Shift on < to 49 because of <quoted-text-part>->•< 
 *    Shift on > to 50 because of <quoted-text-part>->•> 
 *    Shift on | to 51 because of <quoted-text-part>->•| 
 *    Shift on ::= to 52 because of <quoted-text-part>->•::= 
 *    Shift on "" to 53 because of <quoted-text-part>->•"" 
 * ----------- 55 -----------
 *   --Itemset--
 *     <single-quoted-text>-><quoted-text-part>•
 *   --Transitions--
 *    Reduce on < using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on > using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on ::= using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on ( using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on ) using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on   using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on | using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on "" using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on " using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on ' using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on <text-terminal> using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on <quoted-character> using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on >>> using <single-quoted-text>-><quoted-text-part> 
 *    Reduce on <<< using <single-quoted-text>-><quoted-text-part> 
 * ----------- 56 -----------
 *   --Itemset--
 *     <single-quoted-text>->"•
 *   --Transitions--
 *    Reduce on < using <single-quoted-text>->" 
 *    Reduce on > using <single-quoted-text>->" 
 *    Reduce on ::= using <single-quoted-text>->" 
 *    Reduce on ( using <single-quoted-text>->" 
 *    Reduce on ) using <single-quoted-text>->" 
 *    Reduce on   using <single-quoted-text>->" 
 *    Reduce on | using <single-quoted-text>->" 
 *    Reduce on "" using <single-quoted-text>->" 
 *    Reduce on " using <single-quoted-text>->" 
 *    Reduce on ' using <single-quoted-text>->" 
 *    Reduce on <text-terminal> using <single-quoted-text>->" 
 *    Reduce on <quoted-character> using <single-quoted-text>->" 
 *    Reduce on >>> using <single-quoted-text>->" 
 *    Reduce on <<< using <single-quoted-text>->" 
 * ----------- 57 -----------
 *   --Itemset--
 *     <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>•
 *   --Transitions--
 *    Reduce on < using <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code> 
 *    Reduce on   using <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code> 
 *    Reduce on  using <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code> 
 * ----------- 58 -----------
 *   --Itemset--
 *     <line-end>-><line-end><EOL>•
 *   --Transitions--
 *    Reduce on < using <line-end>-><line-end><EOL> 
 *    Reduce on <EOL> using <line-end>-><line-end><EOL> 
 *    Reduce on   using <line-end>-><line-end><EOL> 
 *    Reduce on <<< using <line-end>-><line-end><EOL> 
 *    Reduce on  using <line-end>-><line-end><EOL> 
 * ----------- 59 -----------
 *   --Itemset--
 *     <reduction-code>-><<<•<EOL><reduction-code-text><EOL>>>><line-end>
 *   --Transitions--
 *    Shift on <EOL> to 71 because of <reduction-code>-><<<•<EOL><reduction-code-text><EOL>>>><line-end> 
 * ----------- 60 -----------
 *   --Itemset--
 *     <expression>-><expression><opt-whitespace>|•<opt-whitespace><list>
 *    +<opt-whitespace>->• <opt-whitespace>
 *    +<opt-whitespace>->•(prio:-1)
 *   --Transitions--
 *    Goto on <opt-whitespace> to 72 because of <expression>-><expression><opt-whitespace>|•<opt-whitespace><list>
 *    Shift on   to 5 because of <opt-whitespace>->• <opt-whitespace> 
 *    Reduce on < using <opt-whitespace>-> 
 *    Reduce on ::= using <opt-whitespace>-> 
 *    Reduce on <EOL> using <opt-whitespace>-> 
 *    Reduce on | using <opt-whitespace>-> 
 *    Reduce on "" using <opt-whitespace>-> 
 *    Reduce on " using <opt-whitespace>-> 
 *    Reduce on ' using <opt-whitespace>-> 
 * ----------- 61 -----------
 *   --Itemset--
 *     <line-end>-><opt-whitespace><EOL>•
 *   --Transitions--
 *    Reduce on < using <line-end>-><opt-whitespace><EOL> 
 *    Reduce on <EOL> using <line-end>-><opt-whitespace><EOL> 
 *    Reduce on   using <line-end>-><opt-whitespace><EOL> 
 *    Reduce on <<< using <line-end>-><opt-whitespace><EOL> 
 *    Reduce on  using <line-end>-><opt-whitespace><EOL> 
 * ----------- 62 -----------
 *   --Itemset--
 *     <list>-><list><opt-whitespace><term>•
 *   --Transitions--
 *    Reduce on < using <list>-><list><opt-whitespace><term> 
 *    Reduce on <EOL> using <list>-><list><opt-whitespace><term> 
 *    Reduce on   using <list>-><list><opt-whitespace><term> 
 *    Reduce on | using <list>-><list><opt-whitespace><term> 
 *    Reduce on "" using <list>-><list><opt-whitespace><term> 
 *    Reduce on " using <list>-><list><opt-whitespace><term> 
 *    Reduce on ' using <list>-><list><opt-whitespace><term> 
 * ----------- 63 -----------
 *   --Itemset--
 *     <named-term>-><unnamed-term>(<unquoted-text>•)
 *     <unquoted-text>-><unquoted-text>•<text-terminal>
 *     <unquoted-text>-><unquoted-text>•<quoted-character>
 *   --Transitions--
 *    Shift on ) to 73 because of <named-term>-><unnamed-term>(<unquoted-text>•) 
 *    Shift on <text-terminal> to 14 because of <unquoted-text>-><unquoted-text>•<text-terminal> 
 *    Shift on <quoted-character> to 15 because of <unquoted-text>-><unquoted-text>•<quoted-character> 
 * ----------- 64 -----------
 *   --Itemset--
 *     <unnamed-term>-><<rule-name>>•
 *   --Transitions--
 *    Reduce on < using <unnamed-term>-><<rule-name>> 
 *    Reduce on ( using <unnamed-term>-><<rule-name>> 
 *    Reduce on <EOL> using <unnamed-term>-><<rule-name>> 
 *    Reduce on   using <unnamed-term>-><<rule-name>> 
 *    Reduce on | using <unnamed-term>-><<rule-name>> 
 *    Reduce on "" using <unnamed-term>-><<rule-name>> 
 *    Reduce on " using <unnamed-term>-><<rule-name>> 
 *    Reduce on ' using <unnamed-term>-><<rule-name>> 
 * ----------- 65 -----------
 *   --Itemset--
 *     <literal>->"<double-quoted-text>"•
 *   --Transitions--
 *    Reduce on < using <literal>->"<double-quoted-text>" 
 *    Reduce on ( using <literal>->"<double-quoted-text>" 
 *    Reduce on <EOL> using <literal>->"<double-quoted-text>" 
 *    Reduce on   using <literal>->"<double-quoted-text>" 
 *    Reduce on | using <literal>->"<double-quoted-text>" 
 *    Reduce on "" using <literal>->"<double-quoted-text>" 
 *    Reduce on " using <literal>->"<double-quoted-text>" 
 *    Reduce on ' using <literal>->"<double-quoted-text>" 
 * ----------- 66 -----------
 *   --Itemset--
 *     <double-quoted-text>-><double-quoted-text><quoted-text-part>•
 *   --Transitions--
 *    Reduce on < using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on > using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on ::= using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on ( using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on ) using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on   using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on | using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on "" using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on " using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on ' using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on <text-terminal> using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on <quoted-character> using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on >>> using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 *    Reduce on <<< using <double-quoted-text>-><double-quoted-text><quoted-text-part> 
 * ----------- 67 -----------
 *   --Itemset--
 *     <double-quoted-text>-><double-quoted-text>'•
 *   --Transitions--
 *    Reduce on < using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on > using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on ::= using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on ( using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on ) using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on   using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on | using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on "" using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on " using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on ' using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on <text-terminal> using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on <quoted-character> using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on >>> using <double-quoted-text>-><double-quoted-text>' 
 *    Reduce on <<< using <double-quoted-text>-><double-quoted-text>' 
 * ----------- 68 -----------
 *   --Itemset--
 *     <literal>->'<single-quoted-text>'•
 *   --Transitions--
 *    Reduce on < using <literal>->'<single-quoted-text>' 
 *    Reduce on ( using <literal>->'<single-quoted-text>' 
 *    Reduce on <EOL> using <literal>->'<single-quoted-text>' 
 *    Reduce on   using <literal>->'<single-quoted-text>' 
 *    Reduce on | using <literal>->'<single-quoted-text>' 
 *    Reduce on "" using <literal>->'<single-quoted-text>' 
 *    Reduce on " using <literal>->'<single-quoted-text>' 
 *    Reduce on ' using <literal>->'<single-quoted-text>' 
 * ----------- 69 -----------
 *   --Itemset--
 *     <single-quoted-text>-><single-quoted-text><quoted-text-part>•
 *   --Transitions--
 *    Reduce on < using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on > using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on ::= using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on ( using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on ) using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on   using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on | using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on "" using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on " using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on ' using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on <text-terminal> using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on <quoted-character> using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on >>> using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 *    Reduce on <<< using <single-quoted-text>-><single-quoted-text><quoted-text-part> 
 * ----------- 70 -----------
 *   --Itemset--
 *     <single-quoted-text>-><single-quoted-text>"•
 *   --Transitions--
 *    Reduce on < using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on > using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on ::= using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on ( using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on ) using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on   using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on | using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on "" using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on " using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on ' using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on <text-terminal> using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on <quoted-character> using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on >>> using <single-quoted-text>-><single-quoted-text>" 
 *    Reduce on <<< using <single-quoted-text>-><single-quoted-text>" 
 * ----------- 71 -----------
 *   --Itemset--
 *     <reduction-code>-><<<<EOL>•<reduction-code-text><EOL>>>><line-end>
 *    +<reduction-code-text>->•<reduction-code-text-part>
 *    +<reduction-code-text>->•<reduction-code-text><reduction-code-text-part>
 *    +<reduction-code-text-part>->•<EOL>(prio:-1)
 *    +<reduction-code-text-part>->•>>>
 *    +<reduction-code-text-part>->•<<<
 *    +<reduction-code-text-part>->•"
 *    +<reduction-code-text-part>->•'
 *    +<reduction-code-text-part>->•(
 *    +<reduction-code-text-part>->•)
 *    +<reduction-code-text-part>->•<
 *    +<reduction-code-text-part>->•>
 *    +<reduction-code-text-part>->•::=
 *    +<reduction-code-text-part>->• 
 *    +<reduction-code-text-part>->•""
 *    +<reduction-code-text-part>->•|
 *    +<reduction-code-text-part>->•<text-terminal>
 *    +<reduction-code-text-part>->•<quoted-character>
 *   --Transitions--
 *    Goto on <reduction-code-text> to 74 because of <reduction-code>-><<<<EOL>•<reduction-code-text><EOL>>>><line-end>
 *    Goto on <reduction-code-text-part> to 75 because of <reduction-code-text>->•<reduction-code-text-part>
 *    Goto on <reduction-code-text> to 74 because of <reduction-code-text>->•<reduction-code-text><reduction-code-text-part>
 *    Shift on <EOL> to 76 because of <reduction-code-text-part>->•<EOL>(prio:-1) 
 *    Shift on >>> to 77 because of <reduction-code-text-part>->•>>> 
 *    Shift on <<< to 78 because of <reduction-code-text-part>->•<<< 
 *    Shift on " to 79 because of <reduction-code-text-part>->•" 
 *    Shift on ' to 80 because of <reduction-code-text-part>->•' 
 *    Shift on ( to 81 because of <reduction-code-text-part>->•( 
 *    Shift on ) to 82 because of <reduction-code-text-part>->•) 
 *    Shift on < to 83 because of <reduction-code-text-part>->•< 
 *    Shift on > to 84 because of <reduction-code-text-part>->•> 
 *    Shift on ::= to 85 because of <reduction-code-text-part>->•::= 
 *    Shift on   to 86 because of <reduction-code-text-part>->•  
 *    Shift on "" to 87 because of <reduction-code-text-part>->•"" 
 *    Shift on | to 88 because of <reduction-code-text-part>->•| 
 *    Shift on <text-terminal> to 89 because of <reduction-code-text-part>->•<text-terminal> 
 *    Shift on <quoted-character> to 90 because of <reduction-code-text-part>->•<quoted-character> 
 * ----------- 72 -----------
 *   --Itemset--
 *     <expression>-><expression><opt-whitespace>|<opt-whitespace>•<list>
 *    +<list>->•<term>
 *    +<list>->•<list><opt-whitespace><term>
 *    +<term>->•<named-term>
 *    +<term>->•<unnamed-term>
 *    +<named-term>->•<unnamed-term>(<unquoted-text>)
 *    +<unnamed-term>->•<literal>
 *    +<unnamed-term>->•<<rule-name>>
 *    +<unnamed-term>->•""
 *    +<literal>->•"<double-quoted-text>"
 *    +<literal>->•'<single-quoted-text>'
 *   --Transitions--
 *    Goto on <list> to 91 because of <expression>-><expression><opt-whitespace>|<opt-whitespace>•<list>
 *    Goto on <term> to 25 because of <list>->•<term>
 *    Goto on <list> to 91 because of <list>->•<list><opt-whitespace><term>
 *    Goto on <named-term> to 26 because of <term>->•<named-term>
 *    Goto on <unnamed-term> to 27 because of <term>->•<unnamed-term>
 *    Goto on <unnamed-term> to 27 because of <named-term>->•<unnamed-term>(<unquoted-text>)
 *    Goto on <literal> to 28 because of <unnamed-term>->•<literal>
 *    Shift on < to 29 because of <unnamed-term>->•<<rule-name>> 
 *    Shift on "" to 30 because of <unnamed-term>->•"" 
 *    Shift on " to 31 because of <literal>->•"<double-quoted-text>" 
 *    Shift on ' to 32 because of <literal>->•'<single-quoted-text>' 
 * ----------- 73 -----------
 *   --Itemset--
 *     <named-term>-><unnamed-term>(<unquoted-text>)•
 *   --Transitions--
 *    Reduce on < using <named-term>-><unnamed-term>(<unquoted-text>) 
 *    Reduce on <EOL> using <named-term>-><unnamed-term>(<unquoted-text>) 
 *    Reduce on   using <named-term>-><unnamed-term>(<unquoted-text>) 
 *    Reduce on | using <named-term>-><unnamed-term>(<unquoted-text>) 
 *    Reduce on "" using <named-term>-><unnamed-term>(<unquoted-text>) 
 *    Reduce on " using <named-term>-><unnamed-term>(<unquoted-text>) 
 *    Reduce on ' using <named-term>-><unnamed-term>(<unquoted-text>) 
 * ----------- 74 -----------
 *   --Itemset--
 *     <reduction-code>-><<<<EOL><reduction-code-text>•<EOL>>>><line-end>
 *     <reduction-code-text>-><reduction-code-text>•<reduction-code-text-part>
 *    +<reduction-code-text-part>->•<EOL>(prio:-1)
 *    +<reduction-code-text-part>->•>>>
 *    +<reduction-code-text-part>->•<<<
 *    +<reduction-code-text-part>->•"
 *    +<reduction-code-text-part>->•'
 *    +<reduction-code-text-part>->•(
 *    +<reduction-code-text-part>->•)
 *    +<reduction-code-text-part>->•<
 *    +<reduction-code-text-part>->•>
 *    +<reduction-code-text-part>->•::=
 *    +<reduction-code-text-part>->• 
 *    +<reduction-code-text-part>->•""
 *    +<reduction-code-text-part>->•|
 *    +<reduction-code-text-part>->•<text-terminal>
 *    +<reduction-code-text-part>->•<quoted-character>
 *   --Transitions--
 *    Shift on <EOL> to 92 because of <reduction-code>-><<<<EOL><reduction-code-text>•<EOL>>>><line-end> 
 *    Goto on <reduction-code-text-part> to 93 because of <reduction-code-text>-><reduction-code-text>•<reduction-code-text-part>
 *    Shift on <EOL> to 92 because of <reduction-code-text-part>->•<EOL>(prio:-1) 
 *    Shift on >>> to 77 because of <reduction-code-text-part>->•>>> 
 *    Shift on <<< to 78 because of <reduction-code-text-part>->•<<< 
 *    Shift on " to 79 because of <reduction-code-text-part>->•" 
 *    Shift on ' to 80 because of <reduction-code-text-part>->•' 
 *    Shift on ( to 81 because of <reduction-code-text-part>->•( 
 *    Shift on ) to 82 because of <reduction-code-text-part>->•) 
 *    Shift on < to 83 because of <reduction-code-text-part>->•< 
 *    Shift on > to 84 because of <reduction-code-text-part>->•> 
 *    Shift on ::= to 85 because of <reduction-code-text-part>->•::= 
 *    Shift on   to 86 because of <reduction-code-text-part>->•  
 *    Shift on "" to 87 because of <reduction-code-text-part>->•"" 
 *    Shift on | to 88 because of <reduction-code-text-part>->•| 
 *    Shift on <text-terminal> to 89 because of <reduction-code-text-part>->•<text-terminal> 
 *    Shift on <quoted-character> to 90 because of <reduction-code-text-part>->•<quoted-character> 
 * ----------- 75 -----------
 *   --Itemset--
 *     <reduction-code-text>-><reduction-code-text-part>•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on > using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on ::= using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on ( using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on ) using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on <EOL> using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on   using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on | using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on "" using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on " using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on ' using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on <text-terminal> using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on <quoted-character> using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on >>> using <reduction-code-text>-><reduction-code-text-part> 
 *    Reduce on <<< using <reduction-code-text>-><reduction-code-text-part> 
 * ----------- 76 -----------
 *   --Itemset--
 *     <reduction-code-text-part>-><EOL>•(prio:-1)
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>-><EOL> 
 *    Reduce on > using <reduction-code-text-part>-><EOL> 
 *    Reduce on ::= using <reduction-code-text-part>-><EOL> 
 *    Reduce on ( using <reduction-code-text-part>-><EOL> 
 *    Reduce on ) using <reduction-code-text-part>-><EOL> 
 *    Reduce on <EOL> using <reduction-code-text-part>-><EOL> 
 *    Reduce on   using <reduction-code-text-part>-><EOL> 
 *    Reduce on | using <reduction-code-text-part>-><EOL> 
 *    Reduce on "" using <reduction-code-text-part>-><EOL> 
 *    Reduce on " using <reduction-code-text-part>-><EOL> 
 *    Reduce on ' using <reduction-code-text-part>-><EOL> 
 *    Reduce on <text-terminal> using <reduction-code-text-part>-><EOL> 
 *    Reduce on <quoted-character> using <reduction-code-text-part>-><EOL> 
 *    Reduce on >>> using <reduction-code-text-part>-><EOL> 
 *    Reduce on <<< using <reduction-code-text-part>-><EOL> 
 * ----------- 77 -----------
 *   --Itemset--
 *     <reduction-code-text-part>->>>>•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>->>>> 
 *    Reduce on > using <reduction-code-text-part>->>>> 
 *    Reduce on ::= using <reduction-code-text-part>->>>> 
 *    Reduce on ( using <reduction-code-text-part>->>>> 
 *    Reduce on ) using <reduction-code-text-part>->>>> 
 *    Reduce on <EOL> using <reduction-code-text-part>->>>> 
 *    Reduce on   using <reduction-code-text-part>->>>> 
 *    Reduce on | using <reduction-code-text-part>->>>> 
 *    Reduce on "" using <reduction-code-text-part>->>>> 
 *    Reduce on " using <reduction-code-text-part>->>>> 
 *    Reduce on ' using <reduction-code-text-part>->>>> 
 *    Reduce on <text-terminal> using <reduction-code-text-part>->>>> 
 *    Reduce on <quoted-character> using <reduction-code-text-part>->>>> 
 *    Reduce on >>> using <reduction-code-text-part>->>>> 
 *    Reduce on <<< using <reduction-code-text-part>->>>> 
 * ----------- 78 -----------
 *   --Itemset--
 *     <reduction-code-text-part>-><<<•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>-><<< 
 *    Reduce on > using <reduction-code-text-part>-><<< 
 *    Reduce on ::= using <reduction-code-text-part>-><<< 
 *    Reduce on ( using <reduction-code-text-part>-><<< 
 *    Reduce on ) using <reduction-code-text-part>-><<< 
 *    Reduce on <EOL> using <reduction-code-text-part>-><<< 
 *    Reduce on   using <reduction-code-text-part>-><<< 
 *    Reduce on | using <reduction-code-text-part>-><<< 
 *    Reduce on "" using <reduction-code-text-part>-><<< 
 *    Reduce on " using <reduction-code-text-part>-><<< 
 *    Reduce on ' using <reduction-code-text-part>-><<< 
 *    Reduce on <text-terminal> using <reduction-code-text-part>-><<< 
 *    Reduce on <quoted-character> using <reduction-code-text-part>-><<< 
 *    Reduce on >>> using <reduction-code-text-part>-><<< 
 *    Reduce on <<< using <reduction-code-text-part>-><<< 
 * ----------- 79 -----------
 *   --Itemset--
 *     <reduction-code-text-part>->"•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>->" 
 *    Reduce on > using <reduction-code-text-part>->" 
 *    Reduce on ::= using <reduction-code-text-part>->" 
 *    Reduce on ( using <reduction-code-text-part>->" 
 *    Reduce on ) using <reduction-code-text-part>->" 
 *    Reduce on <EOL> using <reduction-code-text-part>->" 
 *    Reduce on   using <reduction-code-text-part>->" 
 *    Reduce on | using <reduction-code-text-part>->" 
 *    Reduce on "" using <reduction-code-text-part>->" 
 *    Reduce on " using <reduction-code-text-part>->" 
 *    Reduce on ' using <reduction-code-text-part>->" 
 *    Reduce on <text-terminal> using <reduction-code-text-part>->" 
 *    Reduce on <quoted-character> using <reduction-code-text-part>->" 
 *    Reduce on >>> using <reduction-code-text-part>->" 
 *    Reduce on <<< using <reduction-code-text-part>->" 
 * ----------- 80 -----------
 *   --Itemset--
 *     <reduction-code-text-part>->'•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>->' 
 *    Reduce on > using <reduction-code-text-part>->' 
 *    Reduce on ::= using <reduction-code-text-part>->' 
 *    Reduce on ( using <reduction-code-text-part>->' 
 *    Reduce on ) using <reduction-code-text-part>->' 
 *    Reduce on <EOL> using <reduction-code-text-part>->' 
 *    Reduce on   using <reduction-code-text-part>->' 
 *    Reduce on | using <reduction-code-text-part>->' 
 *    Reduce on "" using <reduction-code-text-part>->' 
 *    Reduce on " using <reduction-code-text-part>->' 
 *    Reduce on ' using <reduction-code-text-part>->' 
 *    Reduce on <text-terminal> using <reduction-code-text-part>->' 
 *    Reduce on <quoted-character> using <reduction-code-text-part>->' 
 *    Reduce on >>> using <reduction-code-text-part>->' 
 *    Reduce on <<< using <reduction-code-text-part>->' 
 * ----------- 81 -----------
 *   --Itemset--
 *     <reduction-code-text-part>->(•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>->( 
 *    Reduce on > using <reduction-code-text-part>->( 
 *    Reduce on ::= using <reduction-code-text-part>->( 
 *    Reduce on ( using <reduction-code-text-part>->( 
 *    Reduce on ) using <reduction-code-text-part>->( 
 *    Reduce on <EOL> using <reduction-code-text-part>->( 
 *    Reduce on   using <reduction-code-text-part>->( 
 *    Reduce on | using <reduction-code-text-part>->( 
 *    Reduce on "" using <reduction-code-text-part>->( 
 *    Reduce on " using <reduction-code-text-part>->( 
 *    Reduce on ' using <reduction-code-text-part>->( 
 *    Reduce on <text-terminal> using <reduction-code-text-part>->( 
 *    Reduce on <quoted-character> using <reduction-code-text-part>->( 
 *    Reduce on >>> using <reduction-code-text-part>->( 
 *    Reduce on <<< using <reduction-code-text-part>->( 
 * ----------- 82 -----------
 *   --Itemset--
 *     <reduction-code-text-part>->)•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>->) 
 *    Reduce on > using <reduction-code-text-part>->) 
 *    Reduce on ::= using <reduction-code-text-part>->) 
 *    Reduce on ( using <reduction-code-text-part>->) 
 *    Reduce on ) using <reduction-code-text-part>->) 
 *    Reduce on <EOL> using <reduction-code-text-part>->) 
 *    Reduce on   using <reduction-code-text-part>->) 
 *    Reduce on | using <reduction-code-text-part>->) 
 *    Reduce on "" using <reduction-code-text-part>->) 
 *    Reduce on " using <reduction-code-text-part>->) 
 *    Reduce on ' using <reduction-code-text-part>->) 
 *    Reduce on <text-terminal> using <reduction-code-text-part>->) 
 *    Reduce on <quoted-character> using <reduction-code-text-part>->) 
 *    Reduce on >>> using <reduction-code-text-part>->) 
 *    Reduce on <<< using <reduction-code-text-part>->) 
 * ----------- 83 -----------
 *   --Itemset--
 *     <reduction-code-text-part>-><•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>->< 
 *    Reduce on > using <reduction-code-text-part>->< 
 *    Reduce on ::= using <reduction-code-text-part>->< 
 *    Reduce on ( using <reduction-code-text-part>->< 
 *    Reduce on ) using <reduction-code-text-part>->< 
 *    Reduce on <EOL> using <reduction-code-text-part>->< 
 *    Reduce on   using <reduction-code-text-part>->< 
 *    Reduce on | using <reduction-code-text-part>->< 
 *    Reduce on "" using <reduction-code-text-part>->< 
 *    Reduce on " using <reduction-code-text-part>->< 
 *    Reduce on ' using <reduction-code-text-part>->< 
 *    Reduce on <text-terminal> using <reduction-code-text-part>->< 
 *    Reduce on <quoted-character> using <reduction-code-text-part>->< 
 *    Reduce on >>> using <reduction-code-text-part>->< 
 *    Reduce on <<< using <reduction-code-text-part>->< 
 * ----------- 84 -----------
 *   --Itemset--
 *     <reduction-code-text-part>->>•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>->> 
 *    Reduce on > using <reduction-code-text-part>->> 
 *    Reduce on ::= using <reduction-code-text-part>->> 
 *    Reduce on ( using <reduction-code-text-part>->> 
 *    Reduce on ) using <reduction-code-text-part>->> 
 *    Reduce on <EOL> using <reduction-code-text-part>->> 
 *    Reduce on   using <reduction-code-text-part>->> 
 *    Reduce on | using <reduction-code-text-part>->> 
 *    Reduce on "" using <reduction-code-text-part>->> 
 *    Reduce on " using <reduction-code-text-part>->> 
 *    Reduce on ' using <reduction-code-text-part>->> 
 *    Reduce on <text-terminal> using <reduction-code-text-part>->> 
 *    Reduce on <quoted-character> using <reduction-code-text-part>->> 
 *    Reduce on >>> using <reduction-code-text-part>->> 
 *    Reduce on <<< using <reduction-code-text-part>->> 
 * ----------- 85 -----------
 *   --Itemset--
 *     <reduction-code-text-part>->::=•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>->::= 
 *    Reduce on > using <reduction-code-text-part>->::= 
 *    Reduce on ::= using <reduction-code-text-part>->::= 
 *    Reduce on ( using <reduction-code-text-part>->::= 
 *    Reduce on ) using <reduction-code-text-part>->::= 
 *    Reduce on <EOL> using <reduction-code-text-part>->::= 
 *    Reduce on   using <reduction-code-text-part>->::= 
 *    Reduce on | using <reduction-code-text-part>->::= 
 *    Reduce on "" using <reduction-code-text-part>->::= 
 *    Reduce on " using <reduction-code-text-part>->::= 
 *    Reduce on ' using <reduction-code-text-part>->::= 
 *    Reduce on <text-terminal> using <reduction-code-text-part>->::= 
 *    Reduce on <quoted-character> using <reduction-code-text-part>->::= 
 *    Reduce on >>> using <reduction-code-text-part>->::= 
 *    Reduce on <<< using <reduction-code-text-part>->::= 
 * ----------- 86 -----------
 *   --Itemset--
 *     <reduction-code-text-part>-> •
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>->  
 *    Reduce on > using <reduction-code-text-part>->  
 *    Reduce on ::= using <reduction-code-text-part>->  
 *    Reduce on ( using <reduction-code-text-part>->  
 *    Reduce on ) using <reduction-code-text-part>->  
 *    Reduce on <EOL> using <reduction-code-text-part>->  
 *    Reduce on   using <reduction-code-text-part>->  
 *    Reduce on | using <reduction-code-text-part>->  
 *    Reduce on "" using <reduction-code-text-part>->  
 *    Reduce on " using <reduction-code-text-part>->  
 *    Reduce on ' using <reduction-code-text-part>->  
 *    Reduce on <text-terminal> using <reduction-code-text-part>->  
 *    Reduce on <quoted-character> using <reduction-code-text-part>->  
 *    Reduce on >>> using <reduction-code-text-part>->  
 *    Reduce on <<< using <reduction-code-text-part>->  
 * ----------- 87 -----------
 *   --Itemset--
 *     <reduction-code-text-part>->""•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>->"" 
 *    Reduce on > using <reduction-code-text-part>->"" 
 *    Reduce on ::= using <reduction-code-text-part>->"" 
 *    Reduce on ( using <reduction-code-text-part>->"" 
 *    Reduce on ) using <reduction-code-text-part>->"" 
 *    Reduce on <EOL> using <reduction-code-text-part>->"" 
 *    Reduce on   using <reduction-code-text-part>->"" 
 *    Reduce on | using <reduction-code-text-part>->"" 
 *    Reduce on "" using <reduction-code-text-part>->"" 
 *    Reduce on " using <reduction-code-text-part>->"" 
 *    Reduce on ' using <reduction-code-text-part>->"" 
 *    Reduce on <text-terminal> using <reduction-code-text-part>->"" 
 *    Reduce on <quoted-character> using <reduction-code-text-part>->"" 
 *    Reduce on >>> using <reduction-code-text-part>->"" 
 *    Reduce on <<< using <reduction-code-text-part>->"" 
 * ----------- 88 -----------
 *   --Itemset--
 *     <reduction-code-text-part>->|•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>->| 
 *    Reduce on > using <reduction-code-text-part>->| 
 *    Reduce on ::= using <reduction-code-text-part>->| 
 *    Reduce on ( using <reduction-code-text-part>->| 
 *    Reduce on ) using <reduction-code-text-part>->| 
 *    Reduce on <EOL> using <reduction-code-text-part>->| 
 *    Reduce on   using <reduction-code-text-part>->| 
 *    Reduce on | using <reduction-code-text-part>->| 
 *    Reduce on "" using <reduction-code-text-part>->| 
 *    Reduce on " using <reduction-code-text-part>->| 
 *    Reduce on ' using <reduction-code-text-part>->| 
 *    Reduce on <text-terminal> using <reduction-code-text-part>->| 
 *    Reduce on <quoted-character> using <reduction-code-text-part>->| 
 *    Reduce on >>> using <reduction-code-text-part>->| 
 *    Reduce on <<< using <reduction-code-text-part>->| 
 * ----------- 89 -----------
 *   --Itemset--
 *     <reduction-code-text-part>-><text-terminal>•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on > using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on ::= using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on ( using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on ) using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on <EOL> using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on   using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on | using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on "" using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on " using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on ' using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on <text-terminal> using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on <quoted-character> using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on >>> using <reduction-code-text-part>-><text-terminal> 
 *    Reduce on <<< using <reduction-code-text-part>-><text-terminal> 
 * ----------- 90 -----------
 *   --Itemset--
 *     <reduction-code-text-part>-><quoted-character>•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on > using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on ::= using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on ( using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on ) using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on <EOL> using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on   using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on | using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on "" using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on " using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on ' using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on <text-terminal> using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on <quoted-character> using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on >>> using <reduction-code-text-part>-><quoted-character> 
 *    Reduce on <<< using <reduction-code-text-part>-><quoted-character> 
 * ----------- 91 -----------
 *   --Itemset--
 *     <expression>-><expression><opt-whitespace>|<opt-whitespace><list>•
 *     <list>-><list>•<opt-whitespace><term>
 *    +<opt-whitespace>->• <opt-whitespace>
 *    +<opt-whitespace>->•(prio:-1)
 *   --Transitions--
 *    Reduce on <EOL> using <expression>-><expression><opt-whitespace>|<opt-whitespace><list> 
 *    Reduce on   using <expression>-><expression><opt-whitespace>|<opt-whitespace><list> {  , <EOL>, | }
 *    Reduce on | using <expression>-><expression><opt-whitespace>|<opt-whitespace><list> 
 *    Goto on <opt-whitespace> to 36 because of <list>-><list>•<opt-whitespace><term>
 *    Shift on   to 5 because of <opt-whitespace>->• <opt-whitespace> { ", ', <, "" }
 * ----------- 92 -----------
 *   --Itemset--
 *     <reduction-code>-><<<<EOL><reduction-code-text><EOL>•>>><line-end>
 *     <reduction-code-text-part>-><EOL>•(prio:-1)
 *   --Transitions--
 *    Shift on >>> to 94 because of <reduction-code>-><<<<EOL><reduction-code-text><EOL>•>>><line-end> {  , <EOL> }
 *    Reduce on < using <reduction-code-text-part>-><EOL> 
 *    Reduce on > using <reduction-code-text-part>-><EOL> 
 *    Reduce on ::= using <reduction-code-text-part>-><EOL> 
 *    Reduce on ( using <reduction-code-text-part>-><EOL> 
 *    Reduce on ) using <reduction-code-text-part>-><EOL> 
 *    Reduce on <EOL> using <reduction-code-text-part>-><EOL> 
 *    Reduce on   using <reduction-code-text-part>-><EOL> 
 *    Reduce on | using <reduction-code-text-part>-><EOL> 
 *    Reduce on "" using <reduction-code-text-part>-><EOL> 
 *    Reduce on " using <reduction-code-text-part>-><EOL> 
 *    Reduce on ' using <reduction-code-text-part>-><EOL> 
 *    Reduce on <text-terminal> using <reduction-code-text-part>-><EOL> 
 *    Reduce on <quoted-character> using <reduction-code-text-part>-><EOL> 
 *    Reduce on >>> using <reduction-code-text-part>-><EOL> { >>>, <<<, ", ', (, ), <, >, ::=, "", |, <text-terminal>, <quoted-character> }
 *    Reduce on <<< using <reduction-code-text-part>-><EOL> 
 * ----------- 93 -----------
 *   --Itemset--
 *     <reduction-code-text>-><reduction-code-text><reduction-code-text-part>•
 *   --Transitions--
 *    Reduce on < using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on > using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on ::= using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on ( using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on ) using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on <EOL> using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on   using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on | using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on "" using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on " using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on ' using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on <text-terminal> using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on <quoted-character> using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on >>> using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 *    Reduce on <<< using <reduction-code-text>-><reduction-code-text><reduction-code-text-part> 
 * ----------- 94 -----------
 *   --Itemset--
 *     <reduction-code>-><<<<EOL><reduction-code-text><EOL>>>>•<line-end>
 *    +<line-end>->•<opt-whitespace><EOL>
 *    +<line-end>->•<line-end><EOL>
 *    +<opt-whitespace>->• <opt-whitespace>
 *    +<opt-whitespace>->•(prio:-1)
 *   --Transitions--
 *    Goto on <line-end> to 95 because of <reduction-code>-><<<<EOL><reduction-code-text><EOL>>>>•<line-end>
 *    Goto on <opt-whitespace> to 96 because of <line-end>->•<opt-whitespace><EOL>
 *    Goto on <line-end> to 95 because of <line-end>->•<line-end><EOL>
 *    Shift on   to 5 because of <opt-whitespace>->• <opt-whitespace> 
 *    Reduce on < using <opt-whitespace>-> 
 *    Reduce on ::= using <opt-whitespace>-> 
 *    Reduce on <EOL> using <opt-whitespace>-> 
 *    Reduce on | using <opt-whitespace>-> 
 *    Reduce on "" using <opt-whitespace>-> 
 *    Reduce on " using <opt-whitespace>-> 
 *    Reduce on ' using <opt-whitespace>-> 
 * ----------- 95 -----------
 *   --Itemset--
 *     <reduction-code>-><<<<EOL><reduction-code-text><EOL>>>><line-end>•
 *     <line-end>-><line-end>•<EOL>
 *   --Transitions--
 *    Reduce on < using <reduction-code>-><<<<EOL><reduction-code-text><EOL>>>><line-end> 
 *    Reduce on   using <reduction-code>-><<<<EOL><reduction-code-text><EOL>>>><line-end> 
 *    Reduce on  using <reduction-code>-><<<<EOL><reduction-code-text><EOL>>>><line-end> 
 *    Shift on <EOL> to 58 because of <line-end>-><line-end>•<EOL> 
 * ----------- 96 -----------
 *   --Itemset--
 *     <line-end>-><opt-whitespace>•<EOL>
 *   --Transitions--
 *    Shift on <EOL> to 61 because of <line-end>-><opt-whitespace>•<EOL>
 *
 */
class Text_Parser_BNF extends Text_Parser_LALR
{
    /* Constructor {{{ */
    /**
     * Parser constructor
     * 
     * @param Text_Tokenizer Tokenizer that will feed this parser
     */
    public function __construct(&$tokenizer)
    {
        parent::__construct($tokenizer);
        $this->_gotoTable = unserialize('a:25:{i:0;a:4:{s:9:"<grammar>";i:1;s:8:"<syntax>";i:2;s:6:"<rule>";i:3;s:16:"<opt-whitespace>";i:4;}i:2;a:2:{s:6:"<rule>";i:6;s:16:"<opt-whitespace>";i:4;}i:5;a:1:{s:16:"<opt-whitespace>";i:8;}i:7;a:2:{s:11:"<rule-name>";i:9;s:15:"<unquoted-text>";i:10;}i:13;a:2:{s:15:"<rule-priority>";i:16;s:16:"<opt-whitespace>";i:17;}i:18;a:1:{s:15:"<unquoted-text>";i:20;}i:19;a:1:{s:16:"<opt-whitespace>";i:21;}i:21;a:6:{s:12:"<expression>";i:23;s:6:"<list>";i:24;s:6:"<term>";i:25;s:12:"<named-term>";i:26;s:14:"<unnamed-term>";i:27;s:9:"<literal>";i:28;}i:22;a:1:{s:16:"<opt-whitespace>";i:33;}i:23;a:2:{s:10:"<line-end>";i:34;s:16:"<opt-whitespace>";i:35;}i:24;a:1:{s:16:"<opt-whitespace>";i:36;}i:29;a:2:{s:11:"<rule-name>";i:38;s:15:"<unquoted-text>";i:10;}i:31;a:2:{s:20:"<double-quoted-text>";i:39;s:18:"<quoted-text-part>";i:40;}i:32;a:2:{s:20:"<single-quoted-text>";i:54;s:18:"<quoted-text-part>";i:55;}i:34;a:1:{s:16:"<reduction-code>";i:57;}i:36;a:4:{s:6:"<term>";i:62;s:12:"<named-term>";i:26;s:14:"<unnamed-term>";i:27;s:9:"<literal>";i:28;}i:37;a:1:{s:15:"<unquoted-text>";i:63;}i:39;a:1:{s:18:"<quoted-text-part>";i:66;}i:54;a:1:{s:18:"<quoted-text-part>";i:69;}i:60;a:1:{s:16:"<opt-whitespace>";i:72;}i:71;a:2:{s:21:"<reduction-code-text>";i:74;s:26:"<reduction-code-text-part>";i:75;}i:72;a:5:{s:6:"<list>";i:91;s:6:"<term>";i:25;s:12:"<named-term>";i:26;s:14:"<unnamed-term>";i:27;s:9:"<literal>";i:28;}i:74;a:1:{s:26:"<reduction-code-text-part>";i:93;}i:91;a:1:{s:16:"<opt-whitespace>";i:36;}i:94;a:2:{s:10:"<line-end>";i:95;s:16:"<opt-whitespace>";i:96;}}');
        $this->_actionTable = unserialize('a:97:{i:1;a:1:{s:0:"";a:1:{s:6:"action";s:6:"accept";}}i:0;a:8:{s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:5;}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}}i:2;a:9:{s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:5;}s:0:"";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:7:"$syntax";}s:15:"leftNonTerminal";s:9:"<grammar>";s:8:"function";s:13:"reduce_rule_1";}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}}i:4;a:1:{s:1:"<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:7;}}i:5;a:8:{s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:5;}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}}i:7;a:2:{s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:11;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:12;}}i:9;a:1:{s:1:">";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:13;}}i:10;a:3:{s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:14;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:15;}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:11:"<rule-name>";s:8:"function";s:14:"reduce_rule_43";}}i:13;a:9:{s:1:"(";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:18;}s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:5;}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}}i:16;a:1:{s:3:"::=";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:19;}}i:18;a:2:{s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:11;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:12;}}i:19;a:8:{s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:5;}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}}i:20;a:3:{s:1:")";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:22;}s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:14;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:15;}}i:21;a:4:{s:1:"<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:29;}s:2:"""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:30;}s:1:""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:31;}s:1:"\'";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:32;}}i:22;a:8:{s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:5;}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}}i:23;a:8:{s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:5;}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}}i:24;a:3:{s:1:" ";a:3:{s:6:"action";s:9:"lookahead";s:11:"actionTable";a:7:{s:1:""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:5;}s:1:"\'";R:353;s:1:"<";R:353;s:2:"""";R:353;s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$list";}s:15:"leftNonTerminal";s:12:"<expression>";s:8:"function";s:14:"reduce_rule_11";}s:5:"<EOL>";R:356;s:1:"|";R:356;}s:19:"wildcardActionTable";a:0:{}}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$list";}s:15:"leftNonTerminal";s:12:"<expression>";s:8:"function";s:14:"reduce_rule_11";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$list";}s:15:"leftNonTerminal";s:12:"<expression>";s:8:"function";s:14:"reduce_rule_11";}}i:27;a:8:{s:1:"(";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:37;}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_16";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_16";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_16";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_16";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_16";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_16";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_16";}}i:29;a:2:{s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:11;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:12;}}i:31;a:13:{s:1:"\'";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:41;}s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:42;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:43;}s:3:">>>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:44;}s:3:"<<<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:45;}s:1:"(";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:46;}s:1:")";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:47;}s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:48;}s:1:"<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:49;}s:1:">";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:50;}s:1:"|";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:51;}s:3:"::=";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:52;}s:2:"""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:53;}}i:32;a:13:{s:1:""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:56;}s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:42;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:43;}s:3:">>>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:44;}s:3:"<<<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:45;}s:1:"(";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:46;}s:1:")";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:47;}s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:48;}s:1:"<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:49;}s:1:">";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:50;}s:1:"|";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:51;}s:3:"::=";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:52;}s:2:"""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:53;}}i:34;a:5:{s:5:"<EOL>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:58;}s:3:"<<<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:59;}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<reduction-code>";s:8:"function";s:14:"reduce_rule_49";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<reduction-code>";s:8:"function";s:14:"reduce_rule_49";}s:0:"";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<reduction-code>";s:8:"function";s:14:"reduce_rule_49";}}i:35;a:2:{s:1:"|";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:60;}s:5:"<EOL>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:61;}}i:36;a:4:{s:1:"<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:29;}s:2:"""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:30;}s:1:""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:31;}s:1:"\'";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:32;}}i:37;a:2:{s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:11;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:12;}}i:38;a:1:{s:1:">";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:64;}}i:39;a:14:{s:1:""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:65;}s:1:"\'";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:67;}s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:42;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:43;}s:3:">>>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:44;}s:3:"<<<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:45;}s:1:"(";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:46;}s:1:")";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:47;}s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:48;}s:1:"<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:49;}s:1:">";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:50;}s:1:"|";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:51;}s:3:"::=";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:52;}s:2:"""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:53;}}i:54;a:14:{s:1:"\'";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:68;}s:1:""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:70;}s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:42;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:43;}s:3:">>>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:44;}s:3:"<<<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:45;}s:1:"(";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:46;}s:1:")";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:47;}s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:48;}s:1:"<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:49;}s:1:">";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:50;}s:1:"|";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:51;}s:3:"::=";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:52;}s:2:"""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:53;}}i:59;a:1:{s:5:"<EOL>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:71;}}i:60;a:8:{s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:5;}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}}i:63;a:3:{s:1:")";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:73;}s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:14;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:15;}}i:71;a:15:{s:5:"<EOL>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:76;}s:3:">>>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:77;}s:3:"<<<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:78;}s:1:""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:79;}s:1:"\'";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:80;}s:1:"(";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:81;}s:1:")";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:82;}s:1:"<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:83;}s:1:">";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:84;}s:3:"::=";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:85;}s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:86;}s:2:"""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:87;}s:1:"|";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:88;}s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:89;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:90;}}i:72;a:4:{s:1:"<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:29;}s:2:"""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:30;}s:1:""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:31;}s:1:"\'";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:32;}}i:74;a:15:{s:5:"<EOL>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:92;}s:3:">>>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:77;}s:3:"<<<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:78;}s:1:""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:79;}s:1:"\'";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:80;}s:1:"(";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:81;}s:1:")";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:82;}s:1:"<";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:83;}s:1:">";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:84;}s:3:"::=";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:85;}s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:86;}s:2:"""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:87;}s:1:"|";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:88;}s:15:"<text-terminal>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:89;}s:18:"<quoted-character>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:90;}}i:91;a:3:{s:1:" ";a:3:{s:6:"action";s:9:"lookahead";s:11:"actionTable";a:7:{s:1:""";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:5;}s:1:"\'";R:809;s:1:"<";R:809;s:2:"""";R:809;s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:5:{i:0;s:11:"$expression";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:5:"$list";}s:15:"leftNonTerminal";s:12:"<expression>";s:8:"function";s:14:"reduce_rule_12";}s:5:"<EOL>";R:812;s:1:"|";R:812;}s:19:"wildcardActionTable";a:0:{}}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:5:{i:0;s:11:"$expression";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:5:"$list";}s:15:"leftNonTerminal";s:12:"<expression>";s:8:"function";s:14:"reduce_rule_12";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:5:{i:0;s:11:"$expression";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:5:"$list";}s:15:"leftNonTerminal";s:12:"<expression>";s:8:"function";s:14:"reduce_rule_12";}}i:92;a:15:{s:3:">>>";a:3:{s:6:"action";s:9:"lookahead";s:11:"actionTable";a:15:{s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:94;}s:5:"<EOL>";R:847;s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:3:"<<<";R:850;s:1:""";R:850;s:1:"\'";R:850;s:1:"(";R:850;s:1:")";R:850;s:1:"<";R:850;s:1:">";R:850;s:3:"::=";R:850;s:2:"""";R:850;s:1:"|";R:850;s:15:"<text-terminal>";R:850;s:18:"<quoted-character>";R:850;}s:19:"wildcardActionTable";a:0:{}}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}}i:94;a:8:{s:1:" ";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:5;}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:0:{}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:14:"reduce_rule_10";}}i:95;a:4:{s:5:"<EOL>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:58;}s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:6:{i:0;s:0:"";i:1;s:0:"";i:2;s:5:"$code";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";}s:15:"leftNonTerminal";s:16:"<reduction-code>";s:8:"function";s:14:"reduce_rule_48";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:6:{i:0;s:0:"";i:1;s:0:"";i:2;s:5:"$code";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";}s:15:"leftNonTerminal";s:16:"<reduction-code>";s:8:"function";s:14:"reduce_rule_48";}s:0:"";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:6:{i:0;s:0:"";i:1;s:0:"";i:2;s:5:"$code";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";}s:15:"leftNonTerminal";s:16:"<reduction-code>";s:8:"function";s:14:"reduce_rule_48";}}i:96;a:1:{s:5:"<EOL>";a:2:{s:6:"action";s:5:"shift";s:9:"nextState";i:61;}}i:3;a:3:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$rule";}s:15:"leftNonTerminal";s:8:"<syntax>";s:8:"function";s:13:"reduce_rule_2";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$rule";}s:15:"leftNonTerminal";s:8:"<syntax>";s:8:"function";s:13:"reduce_rule_2";}s:0:"";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$rule";}s:15:"leftNonTerminal";s:8:"<syntax>";s:8:"function";s:13:"reduce_rule_2";}}i:6;a:3:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:7:"$syntax";i:1;s:5:"$rule";}s:15:"leftNonTerminal";s:8:"<syntax>";s:8:"function";s:13:"reduce_rule_3";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:7:"$syntax";i:1;s:5:"$rule";}s:15:"leftNonTerminal";s:8:"<syntax>";s:8:"function";s:13:"reduce_rule_3";}s:0:"";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:7:"$syntax";i:1;s:5:"$rule";}s:15:"leftNonTerminal";s:8:"<syntax>";s:8:"function";s:13:"reduce_rule_3";}}i:8;a:7:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:13:"reduce_rule_9";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:13:"reduce_rule_9";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:13:"reduce_rule_9";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:13:"reduce_rule_9";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:13:"reduce_rule_9";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:13:"reduce_rule_9";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:16:"<opt-whitespace>";s:8:"function";s:13:"reduce_rule_9";}}i:11;a:4:{s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_44";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_44";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_44";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_44";}}i:12;a:4:{s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_45";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_45";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_45";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_45";}}i:14;a:4:{s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_46";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_46";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_46";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_46";}}i:15;a:4:{s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_47";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_47";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_47";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:15:"<unquoted-text>";s:8:"function";s:14:"reduce_rule_47";}}i:17;a:1:{s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:0:"";}s:15:"leftNonTerminal";s:15:"<rule-priority>";s:8:"function";s:13:"reduce_rule_5";}}i:25;a:7:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_13";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_13";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_13";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_13";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_13";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_13";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_13";}}i:26;a:7:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_15";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_15";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_15";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_15";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_15";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_15";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<term>";s:8:"function";s:14:"reduce_rule_15";}}i:28;a:8:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_18";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_18";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_18";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_18";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_18";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_18";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_18";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_18";}}i:30;a:8:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_20";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_20";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_20";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_20";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_20";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_20";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_20";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:8:"$literal";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_20";}}i:33;a:1:{s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:4:{i:0;s:0:"";i:1;s:5:"$text";i:2;s:0:"";i:3;s:0:"";}s:15:"leftNonTerminal";s:15:"<rule-priority>";s:8:"function";s:13:"reduce_rule_6";}}i:40;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_23";}}i:41;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_24";}}i:42;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_31";}}i:43;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_32";}}i:44;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_33";}}i:45;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_34";}}i:46;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_35";}}i:47;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_36";}}i:48;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_37";}}i:49;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_38";}}i:50;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_39";}}i:51;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_40";}}i:52;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_41";}}i:53;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:18:"<quoted-text-part>";s:8:"function";s:14:"reduce_rule_42";}}i:55;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_27";}}i:56;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$text";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_28";}}i:57;a:3:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:10:{i:0;s:0:"";i:1;s:0:"";i:2;s:9:"$ruleName";i:3;s:0:"";i:4;s:9:"$priority";i:5;s:0:"";i:6;s:0:"";i:7;s:11:"$expression";i:8;s:0:"";i:9;s:5:"$code";}s:15:"leftNonTerminal";s:6:"<rule>";s:8:"function";s:13:"reduce_rule_4";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:10:{i:0;s:0:"";i:1;s:0:"";i:2;s:9:"$ruleName";i:3;s:0:"";i:4;s:9:"$priority";i:5;s:0:"";i:6;s:0:"";i:7;s:11:"$expression";i:8;s:0:"";i:9;s:5:"$code";}s:15:"leftNonTerminal";s:6:"<rule>";s:8:"function";s:13:"reduce_rule_4";}s:0:"";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:10:{i:0;s:0:"";i:1;s:0:"";i:2;s:9:"$ruleName";i:3;s:0:"";i:4;s:9:"$priority";i:5;s:0:"";i:6;s:0:"";i:7;s:11:"$expression";i:8;s:0:"";i:9;s:5:"$code";}s:15:"leftNonTerminal";s:6:"<rule>";s:8:"function";s:13:"reduce_rule_4";}}i:58;a:5:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:10:"<line-end>";s:8:"function";s:13:"reduce_rule_8";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:10:"<line-end>";s:8:"function";s:13:"reduce_rule_8";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:10:"<line-end>";s:8:"function";s:13:"reduce_rule_8";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:10:"<line-end>";s:8:"function";s:13:"reduce_rule_8";}s:0:"";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:10:"<line-end>";s:8:"function";s:13:"reduce_rule_8";}}i:61;a:5:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:10:"<line-end>";s:8:"function";s:13:"reduce_rule_7";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:10:"<line-end>";s:8:"function";s:13:"reduce_rule_7";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:10:"<line-end>";s:8:"function";s:13:"reduce_rule_7";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:10:"<line-end>";s:8:"function";s:13:"reduce_rule_7";}s:0:"";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:0:"";i:1;s:0:"";}s:15:"leftNonTerminal";s:10:"<line-end>";s:8:"function";s:13:"reduce_rule_7";}}i:62;a:7:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:5:"$list";i:1;s:0:"";i:2;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_14";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:5:"$list";i:1;s:0:"";i:2;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_14";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:5:"$list";i:1;s:0:"";i:2;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_14";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:5:"$list";i:1;s:0:"";i:2;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_14";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:5:"$list";i:1;s:0:"";i:2;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_14";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:5:"$list";i:1;s:0:"";i:2;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_14";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:5:"$list";i:1;s:0:"";i:2;s:5:"$term";}s:15:"leftNonTerminal";s:6:"<list>";s:8:"function";s:14:"reduce_rule_14";}}i:64;a:8:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:9:"$ruleName";i:2;s:0:"";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_19";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:9:"$ruleName";i:2;s:0:"";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_19";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:9:"$ruleName";i:2;s:0:"";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_19";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:9:"$ruleName";i:2;s:0:"";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_19";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:9:"$ruleName";i:2;s:0:"";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_19";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:9:"$ruleName";i:2;s:0:"";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_19";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:9:"$ruleName";i:2;s:0:"";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_19";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:9:"$ruleName";i:2;s:0:"";}s:15:"leftNonTerminal";s:14:"<unnamed-term>";s:8:"function";s:14:"reduce_rule_19";}}i:65;a:8:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_21";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_21";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_21";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_21";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_21";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_21";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_21";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_21";}}i:66;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_25";}}i:67;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<double-quoted-text>";s:8:"function";s:14:"reduce_rule_26";}}i:68;a:8:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_22";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_22";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_22";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_22";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_22";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_22";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_22";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:3:{i:0;s:0:"";i:1;s:6:"$textb";i:2;s:0:"";}s:15:"leftNonTerminal";s:9:"<literal>";s:8:"function";s:14:"reduce_rule_22";}}i:69;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_29";}}i:70;a:14:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:6:"$texta";i:1;s:6:"$textb";}s:15:"leftNonTerminal";s:20:"<single-quoted-text>";s:8:"function";s:14:"reduce_rule_30";}}i:73;a:7:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:4:{i:0;s:12:"$unnamedTerm";i:1;s:0:"";i:2;s:22:"$reductionArgumentName";i:3;s:0:"";}s:15:"leftNonTerminal";s:12:"<named-term>";s:8:"function";s:14:"reduce_rule_17";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:4:{i:0;s:12:"$unnamedTerm";i:1;s:0:"";i:2;s:22:"$reductionArgumentName";i:3;s:0:"";}s:15:"leftNonTerminal";s:12:"<named-term>";s:8:"function";s:14:"reduce_rule_17";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:4:{i:0;s:12:"$unnamedTerm";i:1;s:0:"";i:2;s:22:"$reductionArgumentName";i:3;s:0:"";}s:15:"leftNonTerminal";s:12:"<named-term>";s:8:"function";s:14:"reduce_rule_17";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:4:{i:0;s:12:"$unnamedTerm";i:1;s:0:"";i:2;s:22:"$reductionArgumentName";i:3;s:0:"";}s:15:"leftNonTerminal";s:12:"<named-term>";s:8:"function";s:14:"reduce_rule_17";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:4:{i:0;s:12:"$unnamedTerm";i:1;s:0:"";i:2;s:22:"$reductionArgumentName";i:3;s:0:"";}s:15:"leftNonTerminal";s:12:"<named-term>";s:8:"function";s:14:"reduce_rule_17";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:4:{i:0;s:12:"$unnamedTerm";i:1;s:0:"";i:2;s:22:"$reductionArgumentName";i:3;s:0:"";}s:15:"leftNonTerminal";s:12:"<named-term>";s:8:"function";s:14:"reduce_rule_17";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:4:{i:0;s:12:"$unnamedTerm";i:1;s:0:"";i:2;s:22:"$reductionArgumentName";i:3;s:0:"";}s:15:"leftNonTerminal";s:12:"<named-term>";s:8:"function";s:14:"reduce_rule_17";}}i:75;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_50";}}i:76;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:4:"$eol";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_52";}}i:77;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_53";}}i:78;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_54";}}i:79;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_55";}}i:80;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_56";}}i:81;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_57";}}i:82;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_58";}}i:83;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_59";}}i:84;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_60";}}i:85;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_61";}}i:86;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_62";}}i:87;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_63";}}i:88;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_64";}}i:89;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_65";}}i:90;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:1:{i:0;s:5:"$part";}s:15:"leftNonTerminal";s:26:"<reduction-code-text-part>";s:8:"function";s:14:"reduce_rule_66";}}i:93;a:15:{s:1:"<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:1:">";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:3:"::=";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:1:"(";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:1:")";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:5:"<EOL>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:1:" ";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:1:"|";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:2:"""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:1:""";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:1:"\'";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:15:"<text-terminal>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:18:"<quoted-character>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:3:">>>";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}s:3:"<<<";a:4:{s:6:"action";s:6:"reduce";s:7:"symbols";a:2:{i:0;s:5:"$text";i:1;s:5:"$part";}s:15:"leftNonTerminal";s:21:"<reduction-code-text>";s:8:"function";s:14:"reduce_rule_51";}}}');
    }
    /* }}} */
    /* reduce_rule_10 {{{ */
    /**
     * Reduction function for rule 10 
     *
     * Rule 10 is:
     * <opt-whitespace>->
     *
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<opt-whitespace>' token
     */
    protected function &reduce_rule_10()
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
        $result =& new Text_Tokenizer_Token('<opt-whitespace>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_1 {{{ */
    /**
     * Reduction function for rule 1 
     *
     * Rule 1 is:
     * <grammar>-><syntax>
     *
     * @param Text_Tokenizer_Token Token of type '<syntax>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<grammar>' token
     */
    protected function &reduce_rule_1(&$syntax)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = $syntax->getValue();
    $result->computeTerminals();
    $result->setContextFree(true);
        $result =& new Text_Tokenizer_Token('<grammar>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_2 {{{ */
    /**
     * Reduction function for rule 2 
     *
     * Rule 2 is:
     * <syntax>-><rule>
     *
     * @param Text_Tokenizer_Token Token of type '<rule>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<syntax>' token
     */
    protected function &reduce_rule_2(&$rule)
    {
        require_once('Text/Tokenizer/Token.php');
        require_once('Structures/Grammar.php');
    $result = new Structures_Grammar();
    $result->setContextFree(false);
    $result->setRegular(false);
    foreach($rule->getValue() as $r) $result->addRule($r);
        $result =& new Text_Tokenizer_Token('<syntax>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_3 {{{ */
    /**
     * Reduction function for rule 3 
     *
     * Rule 3 is:
     * <syntax>-><syntax><rule>
     *
     * @param Text_Tokenizer_Token Token of type '<syntax>'
     * @param Text_Tokenizer_Token Token of type '<rule>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<syntax>' token
     */
    protected function &reduce_rule_3(&$syntax,&$rule)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = $syntax->getValue();
    foreach($rule->getValue() as $r) $result->addRule($r);
    $result->computeTerminals();
        $result =& new Text_Tokenizer_Token('<syntax>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_9 {{{ */
    /**
     * Reduction function for rule 9 
     *
     * Rule 9 is:
     * <opt-whitespace>-> <opt-whitespace>
     *
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<opt-whitespace>' token
     */
    protected function &reduce_rule_9()
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
        $result =& new Text_Tokenizer_Token('<opt-whitespace>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_43 {{{ */
    /**
     * Reduction function for rule 43 
     *
     * Rule 43 is:
     * <rule-name>-><unquoted-text>
     *
     * @param Text_Tokenizer_Token Token of type '<unquoted-text>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<rule-name>' token
     */
    protected function &reduce_rule_43(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<rule-name>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_44 {{{ */
    /**
     * Reduction function for rule 44 
     *
     * Rule 44 is:
     * <unquoted-text>-><text-terminal>
     *
     * @param Text_Tokenizer_Token Token of type '<text-terminal>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<unquoted-text>' token
     */
    protected function &reduce_rule_44(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<unquoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_45 {{{ */
    /**
     * Reduction function for rule 45 
     *
     * Rule 45 is:
     * <unquoted-text>-><quoted-character>
     *
     * @param Text_Tokenizer_Token Token of type '<quoted-character>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<unquoted-text>' token
     */
    protected function &reduce_rule_45(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = $text->getValue();
    $result = $result[1];
        $result =& new Text_Tokenizer_Token('<unquoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_46 {{{ */
    /**
     * Reduction function for rule 46 
     *
     * Rule 46 is:
     * <unquoted-text>-><unquoted-text><text-terminal>
     *
     * @param Text_Tokenizer_Token Token of type '<unquoted-text>'
     * @param Text_Tokenizer_Token Token of type '<text-terminal>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<unquoted-text>' token
     */
    protected function &reduce_rule_46(&$texta,&$textb)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
    foreach (func_get_args() as $arg) $result .= $arg->getValue();
        $result =& new Text_Tokenizer_Token('<unquoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_47 {{{ */
    /**
     * Reduction function for rule 47 
     *
     * Rule 47 is:
     * <unquoted-text>-><unquoted-text><quoted-character>
     *
     * @param Text_Tokenizer_Token Token of type '<unquoted-text>'
     * @param Text_Tokenizer_Token Token of type '<quoted-character>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<unquoted-text>' token
     */
    protected function &reduce_rule_47(&$texta,&$textb)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = $textb->getValue();
    $result = $texta . $result[1];
        $result =& new Text_Tokenizer_Token('<unquoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_5 {{{ */
    /**
     * Reduction function for rule 5 
     *
     * Rule 5 is:
     * <rule-priority>-><opt-whitespace>
     *
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<rule-priority>' token
     */
    protected function &reduce_rule_5()
    {
        require_once('Text/Tokenizer/Token.php');
        $result = 0;
        $result =& new Text_Tokenizer_Token('<rule-priority>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_11 {{{ */
    /**
     * Reduction function for rule 11 
     *
     * Rule 11 is:
     * <expression>-><list>
     *
     * @param Text_Tokenizer_Token Token of type '<list>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<expression>' token
     */
    protected function &reduce_rule_11(&$list)
    {
        require_once('Text/Tokenizer/Token.php');
        require_once('Structures/Grammar/Rule.php');
    require_once('Structures/Grammar/Symbol.php');
    
    $newRule = new Structures_Grammar_Rule();
    foreach($list->getValue() as $idx => $term) if (!is_null($term)) {
        $newRule->addSymbolToRight(Structures_Grammar_Symbol::create($term['term']));
        if ($term['reductionArgumentName'] != '') $newRule->addReductionFunctionSymbolmap($newRule->rightCount()-1, '$' . $term['reductionArgumentName']);
    }
    $result = array($newRule);
        $result =& new Text_Tokenizer_Token('<expression>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_13 {{{ */
    /**
     * Reduction function for rule 13 
     *
     * Rule 13 is:
     * <list>-><term>
     *
     * @param Text_Tokenizer_Token Token of type '<term>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<list>' token
     */
    protected function &reduce_rule_13(&$term)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = array($term->getValue());
        $result =& new Text_Tokenizer_Token('<list>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_15 {{{ */
    /**
     * Reduction function for rule 15 
     *
     * Rule 15 is:
     * <term>-><named-term>
     *
     * @param Text_Tokenizer_Token Token of type '<named-term>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<term>' token
     */
    protected function &reduce_rule_15(&$term)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<term>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_16 {{{ */
    /**
     * Reduction function for rule 16 
     *
     * Rule 16 is:
     * <term>-><unnamed-term>
     *
     * @param Text_Tokenizer_Token Token of type '<unnamed-term>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<term>' token
     */
    protected function &reduce_rule_16(&$term)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<term>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_18 {{{ */
    /**
     * Reduction function for rule 18 
     *
     * Rule 18 is:
     * <unnamed-term>-><literal>
     *
     * @param Text_Tokenizer_Token Token of type '<literal>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<unnamed-term>' token
     */
    protected function &reduce_rule_18(&$literal)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = array(
        'reductionArgumentName' => '',
        'term' => $literal->getValue());
        $result =& new Text_Tokenizer_Token('<unnamed-term>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_20 {{{ */
    /**
     * Reduction function for rule 20 
     *
     * Rule 20 is:
     * <unnamed-term>->""
     *
     * @param Text_Tokenizer_Token Token of type '""'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<unnamed-term>' token
     */
    protected function &reduce_rule_20(&$literal)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = null;
        $result =& new Text_Tokenizer_Token('<unnamed-term>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_6 {{{ */
    /**
     * Reduction function for rule 6 
     *
     * Rule 6 is:
     * <rule-priority>->(<unquoted-text>)<opt-whitespace>
     *
     * @param Text_Tokenizer_Token Token of type '<unquoted-text>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<rule-priority>' token
     */
    protected function &reduce_rule_6(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = (int) $text->getValue();
        $result =& new Text_Tokenizer_Token('<rule-priority>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_49 {{{ */
    /**
     * Reduction function for rule 49 
     *
     * Rule 49 is:
     * <reduction-code>->
     *
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code>' token
     */
    protected function &reduce_rule_49()
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
        $result =& new Text_Tokenizer_Token('<reduction-code>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_23 {{{ */
    /**
     * Reduction function for rule 23 
     *
     * Rule 23 is:
     * <double-quoted-text>-><quoted-text-part>
     *
     * @param Text_Tokenizer_Token Token of type '<quoted-text-part>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<double-quoted-text>' token
     */
    protected function &reduce_rule_23(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<double-quoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_24 {{{ */
    /**
     * Reduction function for rule 24 
     *
     * Rule 24 is:
     * <double-quoted-text>->'
     *
     * @param Text_Tokenizer_Token Token of type '''
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<double-quoted-text>' token
     */
    protected function &reduce_rule_24(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<double-quoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_31 {{{ */
    /**
     * Reduction function for rule 31 
     *
     * Rule 31 is:
     * <quoted-text-part>-><text-terminal>
     *
     * @param Text_Tokenizer_Token Token of type '<text-terminal>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_31(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_32 {{{ */
    /**
     * Reduction function for rule 32 
     *
     * Rule 32 is:
     * <quoted-text-part>-><quoted-character>
     *
     * @param Text_Tokenizer_Token Token of type '<quoted-character>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_32(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = $text->getValue();
    $result = $result[1];
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_33 {{{ */
    /**
     * Reduction function for rule 33 
     *
     * Rule 33 is:
     * <quoted-text-part>->>>>
     *
     * @param Text_Tokenizer_Token Token of type '>>>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_33(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_34 {{{ */
    /**
     * Reduction function for rule 34 
     *
     * Rule 34 is:
     * <quoted-text-part>-><<<
     *
     * @param Text_Tokenizer_Token Token of type '<<<'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_34(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_35 {{{ */
    /**
     * Reduction function for rule 35 
     *
     * Rule 35 is:
     * <quoted-text-part>->(
     *
     * @param Text_Tokenizer_Token Token of type '('
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_35(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_36 {{{ */
    /**
     * Reduction function for rule 36 
     *
     * Rule 36 is:
     * <quoted-text-part>->)
     *
     * @param Text_Tokenizer_Token Token of type ')'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_36(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_37 {{{ */
    /**
     * Reduction function for rule 37 
     *
     * Rule 37 is:
     * <quoted-text-part>-> 
     *
     * @param Text_Tokenizer_Token Token of type ' '
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_37(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_38 {{{ */
    /**
     * Reduction function for rule 38 
     *
     * Rule 38 is:
     * <quoted-text-part>-><
     *
     * @param Text_Tokenizer_Token Token of type '<'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_38(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_39 {{{ */
    /**
     * Reduction function for rule 39 
     *
     * Rule 39 is:
     * <quoted-text-part>->>
     *
     * @param Text_Tokenizer_Token Token of type '>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_39(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_40 {{{ */
    /**
     * Reduction function for rule 40 
     *
     * Rule 40 is:
     * <quoted-text-part>->|
     *
     * @param Text_Tokenizer_Token Token of type '|'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_40(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_41 {{{ */
    /**
     * Reduction function for rule 41 
     *
     * Rule 41 is:
     * <quoted-text-part>->::=
     *
     * @param Text_Tokenizer_Token Token of type '::='
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_41(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_42 {{{ */
    /**
     * Reduction function for rule 42 
     *
     * Rule 42 is:
     * <quoted-text-part>->""
     *
     * @param Text_Tokenizer_Token Token of type '""'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<quoted-text-part>' token
     */
    protected function &reduce_rule_42(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<quoted-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_27 {{{ */
    /**
     * Reduction function for rule 27 
     *
     * Rule 27 is:
     * <single-quoted-text>-><quoted-text-part>
     *
     * @param Text_Tokenizer_Token Token of type '<quoted-text-part>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<single-quoted-text>' token
     */
    protected function &reduce_rule_27(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<single-quoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_28 {{{ */
    /**
     * Reduction function for rule 28 
     *
     * Rule 28 is:
     * <single-quoted-text>->"
     *
     * @param Text_Tokenizer_Token Token of type '"'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<single-quoted-text>' token
     */
    protected function &reduce_rule_28(&$text)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<single-quoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_4 {{{ */
    /**
     * Reduction function for rule 4 
     *
     * Rule 4 is:
     * <rule>-><opt-whitespace><<rule-name>><rule-priority>::=<opt-whitespace><expression><line-end><reduction-code>
     *
     * @param Text_Tokenizer_Token Token of type '<rule-name>'
     * @param Text_Tokenizer_Token Token of type '<rule-priority>'
     * @param Text_Tokenizer_Token Token of type '<expression>'
     * @param Text_Tokenizer_Token Token of type '<reduction-code>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<rule>' token
     */
    protected function &reduce_rule_4(&$ruleName,&$priority,&$expression,&$code)
    {
        require_once('Text/Tokenizer/Token.php');
        require_once('Structures/Grammar/Symbol.php');
    $result =& $expression->getValue();
    $ruleName = '<' . $ruleName->getValue() . '>';
    foreach($result as $i => $rule) {
        $result[$i]->addSymbolToLeft(Structures_Grammar_Symbol::create($ruleName));
        $result[$i]->setReductionFunction($code->getValue());
        $result[$i]->setPriority($priority->getValue());
    }
        $result =& new Text_Tokenizer_Token('<rule>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_8 {{{ */
    /**
     * Reduction function for rule 8 
     *
     * Rule 8 is:
     * <line-end>-><line-end><EOL>
     *
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<line-end>' token
     */
    protected function &reduce_rule_8()
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
        $result =& new Text_Tokenizer_Token('<line-end>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_7 {{{ */
    /**
     * Reduction function for rule 7 
     *
     * Rule 7 is:
     * <line-end>-><opt-whitespace><EOL>
     *
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<line-end>' token
     */
    protected function &reduce_rule_7()
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
        $result =& new Text_Tokenizer_Token('<line-end>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_14 {{{ */
    /**
     * Reduction function for rule 14 
     *
     * Rule 14 is:
     * <list>-><list><opt-whitespace><term>
     *
     * @param Text_Tokenizer_Token Token of type '<list>'
     * @param Text_Tokenizer_Token Token of type '<term>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<list>' token
     */
    protected function &reduce_rule_14(&$list,&$term)
    {
        require_once('Text/Tokenizer/Token.php');
        $result =& $list->getValue();
    $result[] =& $term->getValue();
        $result =& new Text_Tokenizer_Token('<list>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_19 {{{ */
    /**
     * Reduction function for rule 19 
     *
     * Rule 19 is:
     * <unnamed-term>-><<rule-name>>
     *
     * @param Text_Tokenizer_Token Token of type '<rule-name>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<unnamed-term>' token
     */
    protected function &reduce_rule_19(&$ruleName)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = array(
        'reductionArgumentName' => '',
        'term' => '<' . $ruleName->getValue() . '>');
        $result =& new Text_Tokenizer_Token('<unnamed-term>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_21 {{{ */
    /**
     * Reduction function for rule 21 
     *
     * Rule 21 is:
     * <literal>->"<double-quoted-text>"
     *
     * @param Text_Tokenizer_Token Token of type '<double-quoted-text>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<literal>' token
     */
    protected function &reduce_rule_21(&$textb)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
    foreach (func_get_args() as $arg) $result .= $arg->getValue();
        $result =& new Text_Tokenizer_Token('<literal>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_25 {{{ */
    /**
     * Reduction function for rule 25 
     *
     * Rule 25 is:
     * <double-quoted-text>-><double-quoted-text><quoted-text-part>
     *
     * @param Text_Tokenizer_Token Token of type '<double-quoted-text>'
     * @param Text_Tokenizer_Token Token of type '<quoted-text-part>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<double-quoted-text>' token
     */
    protected function &reduce_rule_25(&$texta,&$textb)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
    foreach (func_get_args() as $arg) $result .= $arg->getValue();
        $result =& new Text_Tokenizer_Token('<double-quoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_26 {{{ */
    /**
     * Reduction function for rule 26 
     *
     * Rule 26 is:
     * <double-quoted-text>-><double-quoted-text>'
     *
     * @param Text_Tokenizer_Token Token of type '<double-quoted-text>'
     * @param Text_Tokenizer_Token Token of type '''
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<double-quoted-text>' token
     */
    protected function &reduce_rule_26(&$texta,&$textb)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
    foreach (func_get_args() as $arg) $result .= $arg->getValue();
        $result =& new Text_Tokenizer_Token('<double-quoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_22 {{{ */
    /**
     * Reduction function for rule 22 
     *
     * Rule 22 is:
     * <literal>->'<single-quoted-text>'
     *
     * @param Text_Tokenizer_Token Token of type '<single-quoted-text>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<literal>' token
     */
    protected function &reduce_rule_22(&$textb)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
    foreach (func_get_args() as $arg) $result .= $arg->getValue();
        $result =& new Text_Tokenizer_Token('<literal>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_29 {{{ */
    /**
     * Reduction function for rule 29 
     *
     * Rule 29 is:
     * <single-quoted-text>-><single-quoted-text><quoted-text-part>
     *
     * @param Text_Tokenizer_Token Token of type '<single-quoted-text>'
     * @param Text_Tokenizer_Token Token of type '<quoted-text-part>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<single-quoted-text>' token
     */
    protected function &reduce_rule_29(&$texta,&$textb)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
    foreach (func_get_args() as $arg) $result .= $arg->getValue();
        $result =& new Text_Tokenizer_Token('<single-quoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_30 {{{ */
    /**
     * Reduction function for rule 30 
     *
     * Rule 30 is:
     * <single-quoted-text>-><single-quoted-text>"
     *
     * @param Text_Tokenizer_Token Token of type '<single-quoted-text>'
     * @param Text_Tokenizer_Token Token of type '"'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<single-quoted-text>' token
     */
    protected function &reduce_rule_30(&$texta,&$textb)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
    foreach (func_get_args() as $arg) $result .= $arg->getValue();
        $result =& new Text_Tokenizer_Token('<single-quoted-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_17 {{{ */
    /**
     * Reduction function for rule 17 
     *
     * Rule 17 is:
     * <named-term>-><unnamed-term>(<unquoted-text>)
     *
     * @param Text_Tokenizer_Token Token of type '<unnamed-term>'
     * @param Text_Tokenizer_Token Token of type '<unquoted-text>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<named-term>' token
     */
    protected function &reduce_rule_17(&$unnamedTerm,&$reductionArgumentName)
    {
        require_once('Text/Tokenizer/Token.php');
        $unnamedTerm = $unnamedTerm->getValue();
    $unnamedTerm = $unnamedTerm['term'];
    $result = array(
        'reductionArgumentName' => $reductionArgumentName->getValue(),
        'term' => $unnamedTerm);
        $result =& new Text_Tokenizer_Token('<named-term>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_50 {{{ */
    /**
     * Reduction function for rule 50 
     *
     * Rule 50 is:
     * <reduction-code-text>-><reduction-code-text-part>
     *
     * @param Text_Tokenizer_Token Token of type '<reduction-code-text-part>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text>' token
     */
    protected function &reduce_rule_50(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_52 {{{ */
    /**
     * Reduction function for rule 52 
     *
     * Rule 52 is:
     * <reduction-code-text-part>-><EOL>
     *
     * @param Text_Tokenizer_Token Token of type '<EOL>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_52(&$eol)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_53 {{{ */
    /**
     * Reduction function for rule 53 
     *
     * Rule 53 is:
     * <reduction-code-text-part>->>>>
     *
     * @param Text_Tokenizer_Token Token of type '>>>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_53(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_54 {{{ */
    /**
     * Reduction function for rule 54 
     *
     * Rule 54 is:
     * <reduction-code-text-part>-><<<
     *
     * @param Text_Tokenizer_Token Token of type '<<<'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_54(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_55 {{{ */
    /**
     * Reduction function for rule 55 
     *
     * Rule 55 is:
     * <reduction-code-text-part>->"
     *
     * @param Text_Tokenizer_Token Token of type '"'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_55(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_56 {{{ */
    /**
     * Reduction function for rule 56 
     *
     * Rule 56 is:
     * <reduction-code-text-part>->'
     *
     * @param Text_Tokenizer_Token Token of type '''
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_56(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_57 {{{ */
    /**
     * Reduction function for rule 57 
     *
     * Rule 57 is:
     * <reduction-code-text-part>->(
     *
     * @param Text_Tokenizer_Token Token of type '('
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_57(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_58 {{{ */
    /**
     * Reduction function for rule 58 
     *
     * Rule 58 is:
     * <reduction-code-text-part>->)
     *
     * @param Text_Tokenizer_Token Token of type ')'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_58(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_59 {{{ */
    /**
     * Reduction function for rule 59 
     *
     * Rule 59 is:
     * <reduction-code-text-part>-><
     *
     * @param Text_Tokenizer_Token Token of type '<'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_59(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_60 {{{ */
    /**
     * Reduction function for rule 60 
     *
     * Rule 60 is:
     * <reduction-code-text-part>->>
     *
     * @param Text_Tokenizer_Token Token of type '>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_60(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_61 {{{ */
    /**
     * Reduction function for rule 61 
     *
     * Rule 61 is:
     * <reduction-code-text-part>->::=
     *
     * @param Text_Tokenizer_Token Token of type '::='
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_61(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_62 {{{ */
    /**
     * Reduction function for rule 62 
     *
     * Rule 62 is:
     * <reduction-code-text-part>-> 
     *
     * @param Text_Tokenizer_Token Token of type ' '
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_62(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_63 {{{ */
    /**
     * Reduction function for rule 63 
     *
     * Rule 63 is:
     * <reduction-code-text-part>->""
     *
     * @param Text_Tokenizer_Token Token of type '""'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_63(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_64 {{{ */
    /**
     * Reduction function for rule 64 
     *
     * Rule 64 is:
     * <reduction-code-text-part>->|
     *
     * @param Text_Tokenizer_Token Token of type '|'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_64(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_65 {{{ */
    /**
     * Reduction function for rule 65 
     *
     * Rule 65 is:
     * <reduction-code-text-part>-><text-terminal>
     *
     * @param Text_Tokenizer_Token Token of type '<text-terminal>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_65(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_66 {{{ */
    /**
     * Reduction function for rule 66 
     *
     * Rule 66 is:
     * <reduction-code-text-part>-><quoted-character>
     *
     * @param Text_Tokenizer_Token Token of type '<quoted-character>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text-part>' token
     */
    protected function &reduce_rule_66(&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = func_get_arg(0)->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text-part>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_12 {{{ */
    /**
     * Reduction function for rule 12 
     *
     * Rule 12 is:
     * <expression>-><expression><opt-whitespace>|<opt-whitespace><list>
     *
     * @param Text_Tokenizer_Token Token of type '<expression>'
     * @param Text_Tokenizer_Token Token of type '<list>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<expression>' token
     */
    protected function &reduce_rule_12(&$expression,&$list)
    {
        require_once('Text/Tokenizer/Token.php');
        require_once('Structures/Grammar/Rule.php');
    require_once('Structures/Grammar/Symbol.php');
    
    $newRule = new Structures_Grammar_Rule();
    foreach($list->getValue() as $idx => $term) if (!is_null($term)) {
        $newRule->addSymbolToRight(Structures_Grammar_Symbol::create($term['term']));
        if ($term['reductionArgumentName'] != '') $newRule->addReductionFunctionSymbolmap($newRule->rightCount()-1, '$' . $term['reductionArgumentName']);
    }
    $result = $expression->getValue();
    $result[] =& $newRule;
        $result =& new Text_Tokenizer_Token('<expression>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_51 {{{ */
    /**
     * Reduction function for rule 51 
     *
     * Rule 51 is:
     * <reduction-code-text>-><reduction-code-text><reduction-code-text-part>
     *
     * @param Text_Tokenizer_Token Token of type '<reduction-code-text>'
     * @param Text_Tokenizer_Token Token of type '<reduction-code-text-part>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code-text>' token
     */
    protected function &reduce_rule_51(&$text,&$part)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = '';
    foreach (func_get_args() as $arg) $result .= $arg->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code-text>', $result);
        return $result;
    }
    /* }}} */
    /* reduce_rule_48 {{{ */
    /**
     * Reduction function for rule 48 
     *
     * Rule 48 is:
     * <reduction-code>-><<<<EOL><reduction-code-text><EOL>>>><line-end>
     *
     * @param Text_Tokenizer_Token Token of type '<reduction-code-text>'
     * @return Text_Tokenizer_Token Result token from reduction. It must be a '<reduction-code>' token
     */
    protected function &reduce_rule_48(&$code)
    {
        require_once('Text/Tokenizer/Token.php');
        $result = $code->getValue();
        $result =& new Text_Tokenizer_Token('<reduction-code>', $result);
        return $result;
    }
    /* }}} */
}
?>
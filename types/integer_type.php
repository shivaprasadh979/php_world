<?php
$a = 1234; // decimal number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)
$a = 1_234_567; // decimal number (as of PHP 7.4.0)
/**
* decimal     : [1-9][0-9]*(_[0-9]+)*
*           | 0

*hexadecimal : 0[xX][0-9a-fA-F]+(_[0-9a-fA-F]+)*

*octal       : 0[0-7]+(_[0-7]+)*

*binary      : 0[bB][01]+(_[01]+)*

*integer     : decimal
*            | hexadecimal
*           | octal
*          | binary
*/
echo PHP_INT_SIZE;
echo PHP_INT_MIN;
echo PHP_INT_MAX;
?>
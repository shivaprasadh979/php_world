<?php
//empty string can be casted as false otherwise true
var_dump((bool) "");        // bool(false)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) "false");   // bool(true)
//except zero all other integers will be false
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
//empty array will be false
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
?>
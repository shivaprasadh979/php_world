<?php
//Type is specified by the value assignes to the variable
$some_var = 10; // integer type
$name = "shiva"; // string type

$some_var = $some_var * 10 ;
//$name  = $name *10 // invalid because name is string

//echo  is not a function in php and mostly we should know that it is a language construct
//output no return


//typical usage : Sends data to client web browser
//simple echo
echo 'sum  :  ',2+2,'<br>';


// Strings can either be passed individually as multiple arguments or
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.<br>';


// concatenated together and passed as a single argument
echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "<br>";


//If multiple arguments are passed in, then parentheses will not be required to enforce precedence:
echo "Hello ", isset($name) ? $name : "John Doe<br>", "!<br";



/*With concatenation, the period operator has the same precedence as the addition operator, 
and higher precedence than the ternary operator, so parentheses must be used for the correct 
behaviour */
echo 'Sum: ' . (1 + 2);
echo 'Hello ' . (isset($name) ? $name : '<br>John Doe<br>') . '<br>!<br>';



//varibales will be parsed in double codes 
//whernever you want to use html tags or other tag related info you should use single qoutes 
echo "name : $name <br>";
echo '<a href="http://www.google.com"> Google link<a> <br>';


//Or you need to like this inorder to override the above one
echo "<a href=\"http://www.google.com\">Google link</a> <br>"; //use of escape operator


// echo "<a href="http://www.google.com">Google link</a> <br>"; //invliad syntax
 



//($some_var) ? echo 'true' : echo 'false'; echo will not work as a function


// However, the following examples will work:
($some_var) ? print 'true' : print 'false'; 


//changing the statement
echo $some_var ? 'true': 'false'; 


?>


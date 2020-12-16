<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Using the short array syntax
$array = [
    "foo" => "bar",
    "bar" => "foo",
];

//typecasting 
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);


//array deferencing
function getArray() {
    return array(1, 2, 3);
}

$secondElement = getArray()[1];

// or simple syntax for deferencing
list(, $secondElement1) = getArray(); 
echo $secondElement1
    


?>
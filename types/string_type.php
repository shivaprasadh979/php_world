<?php
//strings declaration with single quotes
echo 'this is a simple string <br/>';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do<br/>';


//strings declaration with double quotes
echo "this is a simple string <br/>";

echo "You can also have embedded newlines in
strings this way as it is
okay to do<br>";

//strings declaration by howdoc with double quotes
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41<br> 
EOT;

//strings declaration by howdoc with single quotes
class foo1
{
    var $foo1;
    var $bar1;

    function __construct()
    {
        $this->foo1 = 'Foo';
        $this->bar1 = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo1 = new foo();
$name1 = 'MyName';

echo <<<'EOT'
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41<br> 
EOT;

?>

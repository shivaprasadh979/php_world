<?php
//Top precendence and no associavity
class MyClass {

    private $myArray = array();
    function pushSomethingToArray($var) {
        array_push($this->myArray, $var);
    }
    function getArray() {
        return $this->myArray;
    }

}

//push some values to the myArray of Mainclass
$myObj = new MyClass();
$myObj->pushSomethingToArray('blue');
$myObj->pushSomethingToArray('orange');
$myObjClone = clone $myObj;
$myObj->pushSomethingToArray('pink');

//testing
print_r($myObj->getArray());     //Array([0] => blue,[1] => orange,[2] => pink)
print_r($myObjClone->getArray());//Array([0] => blue,[1] => orange)
//so array  cloned

?>
<?php
class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // Force a copy of this->object, otherwise
        // it will point to same object.
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;


print("Original Object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);

?>
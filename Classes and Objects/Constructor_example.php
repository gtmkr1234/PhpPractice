<?php
class test{
    public $sum = 45;
    private $count = 54;
    public function hello()
    {
        echo "hello" . "<br>";
        echo $this->count;
    }
    public function __construct(){
        $this->count = 'fail';
    }
    public function __destruct(){
        echo "End of the File!!!";
    }
}
$obj_test = new test();
$obj_test2 = new test();
$obj_test->hello();
echo "<br>";
$obj_test2->hello();
echo "<br>";
/*
 * //As the value of $count changed, the assigned value will be 'fail'
 * hello
 * fail
 * hello
 * fail
 * //As there are two objects, the destructor of the two objects called twice.
 * End of the File!!!End of the File!!!
 */
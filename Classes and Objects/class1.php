<?php
class test{
    public int $sum = 45;
    private int $count = 54;
    public function hello(){
        echo "Welcome"."<br>";
        echo $this->sum;
    }
}
$obj_test = new test();
$test_2 = new test;
var_dump($obj_test);
echo "<br>";
echo $obj_test->sum."<br>";
/*
 * Output of this snippet :-
 * object(test)#1 (2) { ["sum"]=> int(45) ["count":"test":private]=> int(54) }
 * 45
 */
//echo $obj_test->count; can not access because getter and setter methods are required.
echo $obj_test->hello();
/*
 * Output of this snippet:-
 * Welcome
 * 45
 */

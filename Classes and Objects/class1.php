<?php
class test{
    public int $sum = 45;
    private int $count = 54;
}
$obj_test = new test();
$test_2 = new test;
var_dump($obj_test);
echo "<br>";
echo $obj_test->sum;
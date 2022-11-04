<?php
class test4{
    private $name = 87;

}
$ary = new test4();
$temp = new ReflectionProperty("test4","name");
$temp->setAccessible(true);
echo $temp->getValue(new test4);

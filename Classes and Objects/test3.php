<?php
class test3{
    public $num;
    public $count = 45;
    public function __construct(int $num_one, int $num_two){
        echo ($this->init(30)."Class");
        $this->count = $num_one;
    }
    public function init(int $val){
        echo "Welcome";
        $this->num = $val;
    }
    public function __destruct(){
        echo $this->num + $this->count;
    }
}
$obj_test = new test3(40,30,40);
echo $obj_test->num;
$obj_test->__destruct();
$obj_test->count = 20;
$obj_test->__destruct();


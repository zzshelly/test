<?php
require './1.php';
class test2 extends test1{
public function c(){
return parent::get();
}

public function put(){
$a = 'here test2 put';
return $a;
}


}

$test = new test2();
$b = $test->c();
var_dump($b);
echo 22;

<?php
class Car
{
    
    public $color;

    public function __construct($color){
        $this->color= $color;

    }
    public function showcolor()
    {
        echo $this->color;
    }
    public function __destruct()
    {
        
    
        echo ' \n varibel is distroy';
    }
}
$obj = new Car('green');
echo  $obj->showcolor();

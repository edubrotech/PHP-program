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
}
$obj = new Car('green');
echo  $obj->showcolor();

<?php
class Car{
  public $color='Red';

  public function showcolor(){
   echo $this->color;

  }
}
  $obj= new Car();
  echo  $obj->showcolor();
 




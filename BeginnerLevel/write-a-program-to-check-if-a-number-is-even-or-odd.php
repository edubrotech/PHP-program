<?php
## Write a program to check if a number is even or odd in #edubrotech
function checkEvenOrOdd($number){

   if($number%2==0){
      return "$number is an Even number";

   }else{

    return "$number is an Odd number";
   }

}

/// call function

echo checkEvenOrOdd(12);

<?php
// find dupliacted value in php array

function findDuplicateValue($array){
   $duplicationvalue=[];

   for($i=0;$i<count($array);$i++){

    for($j= $i+1; $j < count($array); $j++ ){

        if($array[$i]==$array[$j]){
                $duplicationvalue[]= $array[$i];

        }
     }

   }
   return $duplicationvalue;

}


print_r(findDuplicateValue([1, 2, 3, 4, 5, 6, 1, 2, 3]));
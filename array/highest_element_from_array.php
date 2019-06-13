<?php

/*
Algo: Get largest element from array
--------------

1. Initalize array element with random values
2. Count array elements 
3. Iterate array values as i
5. compare each value with next item in array
6. If first item is grater then next item then swap
7. highest element on last index of array
*/

$arr = array(20, 50, 70, 1, 30, 40, 60, 23); 

for($i=0; $i<count($arr)-1;$i++)
{

   if($arr[$i] > $arr[$i+1])
   {    
        $temp = $arr[$i];
        $arr[$i] =  $arr[$i+1];
        $arr[$i+1] = $temp;
   }
}

$count = count($arr)-1;
echo $count;
print_r($arr[$count]);
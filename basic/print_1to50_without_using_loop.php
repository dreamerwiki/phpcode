<?php

/* 
 
Algo : Print 1-50 without using loop (recursion)

1. Iniatilize $n = 0
2. create function and $n++
3. Check if $n is grater or equals to 50 return $n
4. Else return $n concatinate with recursion abc($n)

*/

$num = 0;
echo abc($num);

function abc($num)
{ $num++; 
  if($num >= 50){
      return $num;
  }else{
    return $num. " , " . abc($num);    
  }
}
<?php
/*
 String reverse without using functions and loop conditions
*/
$str = 'Hello World!';
echo rev($str);
function rev($str)
{  
  $len = strlen($str);
  /* Base case for recursion */
  if($len == 1 ){
    return $str;      
  }else{
    $len--; 
    /* extract last character and concatenate at end of string
      returned from recursive call on remaining string        
      substr(string,start,length); (substr — Return part of a string)          
    */        
    return substr($str,$len) . rev(substr($str,0,$len));           
     
  }
}

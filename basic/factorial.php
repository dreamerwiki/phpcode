<?php


/* 
 
Algo : Factorial of Number

1. To calculate factorial: get the number n
2. Check if number is grater then 1 else return
3. If number grater then 1 then multiply number `n` with (n-1) and return (n - 1)


*/
$num = 5;

$fact = 1;
echo fact($num, $fact);

function fact($num,$fact)
{   
    if($num >1)
    {
    	$fact *= $num * ($num -1);           

        $num = $num -2;

        return fact($num,$fact);            
    }
    else
    { 

      return $fact;

    }
}  	
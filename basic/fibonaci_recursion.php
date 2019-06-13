<?php

/*
 Fibonaci Sequence
 step 1: print first number 
 step 2: add n1 and n2 and save in n3
 step 3: save n2 in n1 and n3 in n2
 step 4: repeat
*/
$num = 10;
$n1 = 0; $n2=1; $n3='';
fs($n1,$n2,$n3,$num);
function fs($n1,$n2,$n3,$num){
  
	if($num<=1)
	{
	    return "Fibonaci series can generate from negative number";  

	}else{
	  
	  if($num > 0)
	  {
		if($n1 == 0)
		{
		   echo $n1 . ",".$n2.",";
		}

		$n3 = $n1 + $n2; 
		echo $n3 . ",";
		$n1 = $n2; 
		$n2 = $n3;
		$num--;  
		return fs($n1,$n2,$n3,$num); 	
	  }  
	    
	}
}


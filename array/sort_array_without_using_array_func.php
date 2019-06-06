<?php
/*
Algo: Sort Array
--------------

1. Initalize array element with random values
2. Count array elements 
3. Iterate array values as i
4. Inner loop for iterating all items in array
5. In the nested loop each item will be compared to all the items below it. 
6. compare each value with next item in array
7. If first item is grater then next item then swap
8. Array sorted
*/

$array = array(9, 18, 34, 3, 10, 15, 2);
$temp ='';
echo "<pre>";
print_r($array);
$count = count($array);
for($i=0;$i<$count;$i++)
{
	for($j=$i+1;$j< $count;$j11)
	{
	  echo "i: ".$i."<br>";
	  echo "j: ".$j."<br>";	
	  if($array[$i] > $array[$j])
	   {
	      $temp =  $array[$i];
	      $array[$i] = $array[$j];
	      $array[$j] = $temp;  
	      echo "Print swapping variable\n";	      
	   }

	   print_r($array);
	}   

}
echo "\nFinal Array\n";
print_r($array);



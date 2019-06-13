<?php


$s = [35,10,25,12,45,9,55,8,1,70,3,23];
$temp = 0;
$max = count($s);
for( $i=0; $i < count($s); $i++ )
{
	for ($j=0; $j< count($s)-1; $j++)
	{
		if( $s[$j] > $s[$j+1] )
		{
	       $temp    = $s[$j];
	       $s[$j]   = $s[$j+1];
	       $s[$j+1] = $temp;	       
		}

		// echo "i => $i, j => $j <br>";
	 //       echo "s[$j] =>" .$s[$j] .", ";
	 //       echo "s[$j+1] =>" .$s[$j+1] .", ";
	 //       echo "<pre>";
  //          print_r($s);echo "<br>";
	}
   
 
}

echo "<pre>";
$sl = $max - 2;
echo $s[$sl];
print_r($s);
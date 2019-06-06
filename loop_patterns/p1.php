<?php

for($i=1;$i<7;$i++)
{ 
  if($i==2 || $i==5){continue;}
  for($j=1;$j<=$i;$j++)
    {  
      //echo "<br>i=>".$i." & j=>". $j."<br>";
      
      if($i==4 && $j==4){  
         $j++;echo $j; 
      }else{
         echo $j;      
      }
    }
  echo "<br>";
     
}


/*
Result:

1
1 2 3
1 2 3 5
1 2 3 4 5 6

*/


<?php

$n = 5;
$l = 2 * $n -2;
for ($i=1;$i<=$n;$i++)
{

	for($k=($n - $i);$k>0;$k--)
	{
		echo "&nbsp;";
	}

	for($j=1;$j<=$i;$j++)
	{
		echo "*&nbsp;";
	}
  echo "<br>";	
}
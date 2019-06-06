<?php

//Find even odd from array
function odd($var)
{
    // returns whether the input integer is odd
    return $var & 1;
}

function even($var)
{
    // returns whether the input integer is even
    if($var % 2 == 0)
    	return $var;

}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "<pre>";
// echo "Odd :n";
// print_r(array_filter($array1, "odd"));
echo "Even:n";
print_r($array2);
print_r(array_filter($array2, "even"));

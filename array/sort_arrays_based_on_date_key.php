<?php

$array = array(
			array
			    (
			        'id' => 2,
			        'type' => 'comment',
			        'text' => 'hey',
			        'datetime' => '2010-05-15 11:29:45'
			    ),
			array
			    (
			        'id' => 4,
			        'type' => 'status',
			        'text' => 'yeww',
			        'datetime' => '2010-05-26 16:04:24'
			    ),
			array
			    (
			        'id' => 3,
			        'type' => 'status',
			        'text' => 'oi',
			        'datetime' => '2010-05-26 15:59:53',
			    )

			

		  );


$sa = array();
function date_compare($a, $b)
{
    $t1 = strtotime($a['datetime']);
    $t2 = strtotime($b['datetime']);
    return $t1 - $t2;
}    
$sa = usort($array, 'date_compare');
echo "<pre>";
print_r($array);
<?php
// function array_sort($array, $on, $order=SORT_ASC){

//     $new_array = array();
//     $sortable_array = array();

//     if (count($array) > 0) {
//         foreach ($array as $k => $v) {
//             if (is_array($v)) {
//                 foreach ($v as $k2 => $v2) {
//                     if ($k2 == $on) {
//                         $sortable_array[$k] = $v2;
//                     }
//                 }
//             } else {
//                 $sortable_array[$k] = $v;
//             }
//         }

//         switch ($order) {
//             case SORT_ASC:
//                 asort($sortable_array);
//                 break;
//             case SORT_DESC:
//                 arsort($sortable_array);
//                 break;
//         }

//         foreach ($sortable_array as $k => $v) {
//             $new_array[$k] = $array[$k];
//         }
//     }

//     return $new_array;
// }

// $list = array(
//    array( 'type' => 'suite', 'name'=>'A-Name'),
//    array( 'type' => 'suite', 'name'=>'C-Name'),
//    array( 'type' => 'suite', 'name'=>'B-Name')
//  );

// $list = array_sort($list, 'name', SORT_ASC);
// echo "<pre>";
// print_r(asort($list));
$data[] = array('volume' => 67, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 1);
$data[] = array('volume' => 85, 'edition' => 6);
$data[] = array('volume' => 98, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 6);
$data[] = array('volume' => 67, 'edition' => 7);

foreach ($data as $key => $row) {
    $volume[$key]  = $row['volume'];
    $edition[$key] = $row['edition'];
}

// as of PHP 5.5.0 you can use array_column() instead of the above code
//$volume  = array_column($data, 'volume');
$edition = array_column($data, 'edition');

// Sort the data with volume descending, edition ascending
echo "<pre>";
print_r($data);
// Add $data as the last parameter, to sort by the common key
array_multisort($volume, SORT_DESC, $data);

print_r($data);

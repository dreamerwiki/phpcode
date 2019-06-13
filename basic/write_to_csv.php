<?php
//include_once 'connection.php';
ini_set('display_errors', 1);


$arr=array();
$arr[0]=array('gdfg','asda');
$arr[1]=array('gdfg1');
$arr[2]=array('gdfg2');

//var_dump($query_array);
$fp = fopen('sku.csv', 'w');
 //fputcsv($fp, $arr);
foreach ($arr as $fields) {
       //var_dump($fields);
    fputcsv($fp, $fields);
   
}


fclose($fp);




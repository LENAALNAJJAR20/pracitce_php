<?php
$json = '["HTML","CSS"]';
var_dump($json);
echo '<br>';
$phparray = json_decode($json);
var_dump($phparray);

echo '<br>';
 foreach ($phparray as $key ) {
     echo $key . '<br>';
 }
 echo '<br>';

$phparray2 = array("HTML","CSS");
var_dump($phparray2);
echo '<br>';
$json2 = json_encode($phparray2);
var_dump($json2);
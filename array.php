<?php
//Arrray

$cars = array ('toyota','sedan','mercidi');
//echo gettype ($cars);

$cars[8] = 'suzuki';
$cars [] ='corola';
$cars [c]= 'ford';
$cars [] = 'ferri';
echo"<pre>";
print_r( $cars);

echo "</pre>";
//associative array
$fruits = array('a'=>'apple','b'=>'banana');
//$fruits[""] = 'this is last value;
echo $fruits[""];
echo "<pre>";
print_r( $fruits );
echo "</pre>";
//echo $fruits['a'];
$arr2D = array ($cars,$fruits);
echo "<pre>";
print_r($arr2D);
echo "<pre>";

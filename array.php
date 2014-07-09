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
echo "<pre>";
print_r( $fruits );
echo "</pre>";

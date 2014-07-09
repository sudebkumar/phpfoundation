<?php
function getGrade($marks){

if($marks>69 && $marks<100){

$grade ='A+';
}
elseif($marks>29 && $marks <= 69){

$grade ='A';
}

else{
$grade = 'F';
}
return $grade;
}

$grade = getGrade(23);
echo $grade;


?>
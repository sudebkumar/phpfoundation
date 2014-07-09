<?php 
$marks=90;


if($marks<=32)
{
echo "$grade=F";
}
else if($marks>=33 && $marks <=39)
{
echo "$grade=D";
}
else if($marks>=40 && $marks <=49)
{
echo "$grade=C";
}
else if($marks>=50 && $marks <=59)
{
echo "$grade=B";
}
else if($marks>=60 && $marks <=69)
{
echo "$grade=A-";
}
else if($marks>=70 && $marks <=79)
{
echo "$grade=A";
}
else if($marks>=80 && $marks <=99)
{
echo "$grade=A+";
}
<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

function getTitle ($genree="")
{
    $keyValue = 0;
    
$films = array(
   "genres" => array("comedy", "tragedy", "romance", "action"),
    "film_titles" => array("Big", "Star War", "French Key", "Titanic",),
    "stars" => array("Bill Murry", "Mark Hammels", "Cate Blanchett", "Leonard Deaprio"),
    
);

foreach ($films as $fkey => $firstValue) {
    
    if($fkey=="genres")
    {
        foreach ($firstValue as $key => $secondValue)
        {
            if($secondValue==$genree)
            {
               $keyValue=$key;
               
            }
            
        }
    }
  
}
$filmTitle = $films['film_titles'][$keyValue];
 return $filmTitle;

}


function getStar ($genree="")
{
    $keyValue = 0;
    
$films = array(
   "genres" => array("comedy", "tragedy", "romance", "action"),
    "film_titles" => array("Big", "Star War", "French Key", "Titanic",),
    "stars" => array("Bill Murry", "Mark Hammels", "Cate Blanchett", "Leonard Deaprio"),
    
    
);

foreach ($films as $fkey => $firstValue) {
    
    if($fkey=="genres")
    {
        foreach ($firstValue as $key => $secondValue)
        {
            if($secondValue==$genree)
            {
              $keyValue=$key;

 }
            
        }
    }
  
}
  $starWithSpace = strtolower ( $films['stars'][$keyValue]);
  $star = str_replace(' ',"-",$starWithSpace);
 return $star;

}


function printTitleAndStar()
{
  echo "Film Title is : ".getTitle ("action");
  echo "<br/>";
  echo "The Star Name is : ".getStar ("action");
}

printTitleAndStar();
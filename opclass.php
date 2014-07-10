<?php
//phpinfo
class User{
  var $name ="FTFL";
  var $email ="";
  
  function getName() {
 return $this->name;
  }
}

//instantiate an object from a class 
$user = new User();
$user1 = new User();
$user2 = new User();
//var_dump ($user);
//echo $user-> name;
echo $user1->getName();
echo $user1->getName();
?>
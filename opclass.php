<?php
//phpinfo
class User{
  var $name ="FTFL";
  var $email ="";
  
  function getName() {
  return "FTFL2";
  }
}

//instantiate an object from a class 
$user = new User();
//var_dump ($user);
echo $user-> name;
echo $user->getName();
?>
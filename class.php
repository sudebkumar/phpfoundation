<?php 
class User{
protected function userAge() {
    return 'some value';   
	   
	   }
}
class person extends User{
    public function getUserAge() {
         return $this->userAge();
    }
}

$person = new Person();
echo $person->getUserAge();
//echo $person->UserAge();

<?php 
//constant class

class User{
    protected $firstName;
    protected $lastName;
    protected $age;
    protected $email;
    protected $address;
    const type = 1;
    public function __construct($firstName,$lastName,$age,$email,$address){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->email = $email;
        $this->address = $address;
    }
    public function greeting(){
        return "Hi $this->firstName \n";
    }
    public function get_firstname(){
        return $this->firstName;
    }

    
}

$hamza = new User('Hamza','EJJARAIFI',23,'email@email.com',"Youssofia");
echo $hamza::type;
$hamza->greeting();

class Admin extends User{
    public $username ; 
}
$admin = new Admin('First name','Last',22,"email",'address');



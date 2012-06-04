<?php

class user
{
    public $name;
    public $password;
    public $time;
    public $referrer;
    
    public function __construct($name,$password)
    {
        $this->name=$name;
        $this->password=$password;
        $this->time=time();
        $this->referrer=$_SERVER['PHP_SELF'];
        
    }
    
    public function __sleep()  
    {
        $this->password="";
        return $this;
    }
    
    
}

$obj=new user("root","pass");

echo "<pre>";
print_r($obj);
echo "<pre>";

$object=serialize($obj);

echo "<pre>";
print_r($obj);
echo "<pre>";

echo $object;
?>
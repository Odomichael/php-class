gi<?php  
/** 
 *Inherited methods can be overridden by redifining the methods with the same name in the child class
*/


class Students{
    public $name;
    public $laptop;

    public function __construct($name, $laptop)

    {
        $this->name = $name;
        $this->laptop = $laptop;
        
    }

    public function message(){
        echo "The Student is $this->name and the laptop is $this->laptop ";
    }
}

class PhpStudents extends Students {
    public $xampp;
    public function __construct($name, $laptop, $xampp)

    {
        $this->name = $name;
        $this->laptop = $laptop;
        $this->xampp = $xampp; 
    }
    public function message()
    {
        echo "The Student is $this->name, the laptop is $this->laptop and the server is
        $this->xampp";
    }
}

$developers = new PhpStudents("Ebuka", "Hewlett Peckett", "XAMPP");
$developers->message();

//Use the final keyword to prevent class inheritance or to prevent method overriding

?>
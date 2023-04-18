<?php
/*
*The child class method must be defined with the same name and it redeclares the parent abstract method.
*The cjild class method must be defined with the same or a less restricted access modifier.
*The number of required arguments must be the same.

*However, the child class may have optional arguments in addition
*/

//An abstract class is a class that contains at least one abstract method.

abstract class Car {
    public $name;
    public function __construct($name)

    {
        $this->name = $name;
    }

    //An abstract method is a method that is declared, but not implemented in the code.
    abstract public function intro()  : string;

}

class Audi extends car {
    public function intro() : string {
        return "Made in Sweden! This is $this->name";
    }

}

class Mercedes extends Car {
    public function intro(): string
    {
        return "German Machine. This is $this->name";
    }
}

class Hilux extends Car {
    public function intro(): string
    {
        return "Don't know orign. This is $this->name";
    }
}

$audi = new Audi ("Audi");
echo $audi->intro();
echo "<br>";

$mercedes= new Mercedes ("Mercedes");
echo $mercedes->intro();
echo "<br>";

$hilux = new Hilux("Audi");
echo $hilux->intro();
echo "<br>";
?>
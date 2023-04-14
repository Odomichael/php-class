<?php

/*
 A class is a template for objects and an object is an instance of  a class

*/
/*
 A class is a template for objects and an object is an instance of  a class

*/
class Fruit {
    public $name ;
    public $color;



    //Methods
    function insert_your_name ($name) {
        $this->name = $name;
    }

    function retrieve_your_name () {
        return $this->name;
    }

    function set_color($color) {
        $this->color=$color;
    }

    function get_color() {
        return $this->color;
    }
}

//created a new object / instantiated the class

$apple = new Fruit();
$banana = new Fruit();

$apple->insert_your_name('Applepie');
$banana->insert_your_name('Bananapie');

echo $apple->retrieve_your_name();
echo "<br>";
echo $banana->retrieve_your_name();

echo "<br>";
echo "<br>";
echo "<br>";

//created a new object / instantiated the class

$green = new Fruit ();
$black = new Fruit ();

$green->set_color('greencolor');
$black->set_color('blackcolor');

echo $green->get_color();
echo "<br>";
echo $black->get_color();


//you can change a property value outside the value

class Money{
    public $pounds;
}

$get_money = new Money();
$get_money->pounds = "Naira";

echo "<br>";
echo "<br>";


echo $get_money->pounds;

echo "<br>";

//pp instanceof - It is udsed  to check if an object belongs to a specific class
var_dump($apple instanceof Fruit);

?>
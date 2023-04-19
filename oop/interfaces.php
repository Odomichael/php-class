<?php
/*
*/

interface Animal {
    public function makeSound();
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow <br>";
    }

    
}


class Dog implements Animal {
    public function makeSound() {
        echo "Bark <br>";
    }
        
}


class Lion implements  Animal {
    public function makeSound() {
        echo "Roar";
    }
}
$animal = new Cat();
$animal->makeSound();

$animal = new Dog();
$animal->makeSound();

$animal = new Lion;
$animal->makeSound();

?>
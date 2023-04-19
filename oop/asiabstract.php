

<?php
/*
Write an abstract class named "shape" that has an abstract method "getArea". Create two concrete classes "Rectangle" and " Circle" 
that extend the "Shape" class and implement the "getArea" method for each shape.
*/



abstract class Shape {

    public $name;
    public function __construct($name)

    {
        $this->name = $name;
    }

    //An abstract method is a method that is declared, but not implemented in the code.
    abstract public function getArea() : string;

}

    class Rectangle extends Shape {
        public function getArea() : string {
        return " This is a shape !  The shape is $this->name";
        }
    }

  

    class Circle extends Shape {
        public function getArea()  : string {
            return " This is another type of shape ! The shape is $this->name";
        
        }
    }

    $rec= new Rectangle("Retangular");
    echo $rec->getArea();
    echo "<br>";

    $cir= new Circle("Circular");
    echo $cir->getArea();






?>
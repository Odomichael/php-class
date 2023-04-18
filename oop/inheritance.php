<?php
 class Money {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    protected function value () {
        echo "The value of {$this->name}  is useless and the color is {$this->color}.";
    
    }
 }

 class Nigeria extends Money {
    public function message() {
        echo "Dollar is much better! <br>";
        $this->value();
    }
 }

 $naira = new Nigeria ("Naira","Grey");
 $naira -> message();
 //$naira -> value();



 


?>
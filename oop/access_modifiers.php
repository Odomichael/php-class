<?php  
class Material {
    public $name;
    protected $color;
    private $height;

    function set_name($age) {
        $this->name = $age;
    }

    protected function set_color($age) {
        $this->color= $age;
    }

    private function set_height($age) {
        this->height = $age;
    } 
}

$flutter = new Material();
/*
$flutter->name = 'Mango';
$flutter->color = 'Blue';
$flutter->height;*/


?>
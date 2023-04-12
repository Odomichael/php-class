<?php  
class Food {
      public $name;
      public $color;


      function __construct($name, $color)
      {
        $this->name = $name;
        $this->color = $color;
      }

      function get_name() {
        return $this->name;
      }

      function get_color() {
        return $this->color;
      }

}

$garri = new Food("Garri","Yellow");
echo $garri->get_name();
echo "<br>";
echo $garri->get_color();

?>
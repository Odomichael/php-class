<?php    
class JavaScript {
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }
    function __destruct()
    {
        echo "JavaScript is $this->name";
    }
}

$kenneth = new JavaScript("Easy")

?>
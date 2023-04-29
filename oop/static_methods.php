<?php
 class Chelsea {
    public static function winners() {
        echo "We da best ! <br>";
    }
 }

 Chelsea::winners();

 //More on static methods

 class Greeting {
    public static function welcome() {
        echo "Hello World <br>";
    
    }

    public function __construct()

    {

         self::welcome();
    }
 }


 new Greeting();
 
 //when a child class is inheriting from a parent class. The public or protected static method can be accessed with the 
 //"parent" keyword then "::"

 class Domain {
    protected static function getWebsiteName() {
        return "kodex.com" ;
    }
 }

 class DomainKodex extends Domain {
    public $websiteName;

    public function __construct()
    {
        $this->websiteName = parent::getWebsiteName();
    }
 }


 $domainKodex = new DomainKodex;
 echo $domainKodex->websiteName;









?>


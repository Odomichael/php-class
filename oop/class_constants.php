<?php
/**
 * class constants can be useful if you need to define some constant data withing a class.
 * Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.
 */

 class Goodbyte{
    const  LEAVING_MESSAGE = "Thank you for visitng kodex limited"; 
}

echo Goodbyte:: LEAVING_MESSAGE;

echo "<br>";


//we can access a constant from inside the class by using the self keyword followed by::


class Goodbye{
    const FAREWELL = "Goodbye, See you soon";
    public function byebye() {
        echo self::FAREWELL;
    }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>
<?php  
/**
 * 
 */
trait messageOne{
public function voice(){
    echo "OOP is easy!";
}
    
}
class Welcome {
    use messageOne;
}

class WelcomeOne {
    use messageOne;
}

class WelcomeTwo {
    use messageOne;
}

$obj = new Welcome();
$obj->voice();
echo "<br>";

$obj = new WelcomeOne();
$obj->voice();
echo "<br>";

$obj = new WelcomeTwo();
$obj->voice();





?>
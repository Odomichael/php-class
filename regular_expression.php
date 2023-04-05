<?php

$str = "HelloWorld";
// "/" is the delimiter and "i" is a modifier that makes the search case-insensitive
//https://github.com/DonGuillotine/procedural-php
$pattern = "/world/i"; //returns 1 cus there is pattern
$pat = "/coke/i"; //returns 0 cus there is pattern
echo preg_match($pattern, $str);
echo "<br>";

echo preg_match($pat, $str);

echo "<br>";

$sentence = "The rain in spain falls mainly on the plains of Gucci Maine";
$pattern= "/ain/i";
echo preg_match_all ($pattern, $sentence);



/*
        Regular Expression Functions -> preg_replace()
        i - case-insensitive search
        m - multiline search
        u - enables correct matching of UTF-8 encoded pattern
    */




?>

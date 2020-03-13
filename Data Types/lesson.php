<?php

//-------------------------------------
//--------- Types of data -------------
//-------------------------------------

//    [1] String :
$var1 = "I Love PHP";

//    [2] Integer :
$var2 = 100;

//    [3] Boolean :
$var3 = False;

//    [4] Floating Point - AKA Double - :
$var4 = 1.4;

//    [5] Arrays :
$var5 = array(
    "A" => "Val1",
    "B" => "Val2",
    "C" => "Val3",
);

//    [6] nulls :
$var6 = Null;

//    [7] Objects :

$var7 = new Book;
class Book
{
    function Book()
    {
        $this->genre = "Adventure";
    }
}

//    [8] Resources :

// $var8 = mysqli_connect("localhost", "Seif", "P@ssW0rd", "mydb");
$var8 = fopen("Seif.txt", "r");

echo "<h2>Get Type</h2>";
echo gettype($var1) . "<br/>";
echo gettype($var2) . "<br/>";
echo gettype($var3) . "<br/>";
echo gettype($var4) . "<br/>";
echo gettype($var5) . "<br/>";
echo gettype($var6) . "<br/>";
echo gettype($var7) . "<br/>";
echo gettype($var8) . "<br/>";

echo "<h2>Var Dumb</h2>";
var_dump($var1); echo "<br/>";
var_dump($var2); echo "<br/>";
var_dump($var3); echo "<br/>";
var_dump($var4); echo "<br/>";
var_dump($var5); echo "<br/>";
var_dump($var6); echo "<br/>";
var_dump($var7); echo "<br/>";
var_dump($var8); echo "<br/>";
<?php

/*
    Multidimensional Arrays

    Syntax:
        array(
            array(element-1, element-2, ..., element-n),
            array(element-1, element-2, ..., element-n),
            array(element-1, element-2, ..., element-n)
        );
*/

$diet = array(
    array("Apple", "Bananas", "Milk"),
    array("Meat", "Apple", "Egg"),
    array("Fish", "Apple"),
    array("Rice", "Apple"),
    array("Bread", "Banana"),
    array(
        array("Seif Hesham", "Mostafa Nagy", "Shady Zekry"),
        array("Abdo Gamal", "Abdo Fo'ad", "Sherif Hesham")
    )
);

echo "<pre>";

print_r($diet);

echo $diet[5][1][1];

echo "</pre>";


/*
    Syntax:
        array(
            key-1 => array(element-1, element-2, ..., element-n),
            key-2 => array(element-1, element-2, ..., element-n),
            key-3 => array(element-1, element-2, ..., element-n),
            ....
            key-n => array(element-1, element-2, ..., element-n)
        );
*/

$diet = array(
    "Day One"   => array("Apple", "Bananas", "Milk"),
    "Day Two"   => array("Watermelon", "Pineapple", "Mangoes"),
    "Day Three" => array("Fish", "Apple"),
    "Day Four"  => array("Rice", "Apple"),
    "Day Five"  => array("Bread", "Banana", array("10%", "40%", "38%")),
);

echo "<pre>";

print_r($diet);

echo $diet["Day One"][0];

echo "</pre>";












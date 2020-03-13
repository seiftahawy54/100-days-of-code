<?php
/*
     Syntax:
        define(NAME, VALUE, CASE-INSENSITIVE);
        CASE-INSENSITIVE is by default is false;
*/

// define("SITE_STATUS", True);

echo "<title>Constants in PHP</title>";
const SITE_STATUS = False;

if (SITE_STATUS)
{

    $firstName = "Seif";
    echo $firstName . "<br/>";

    define("FIRST_NAME", "Seif", true);
    echo first_name . "<br/>";

    define("LAST_NAME", "Hesham");
    echo LAST_NAME . "<br/>";

    echo PHP_INT_MAX . "<br/>";

    //------------------------------------
    //--------- Magic Constants ----------
    //------------------------------------

    echo __FILE__ . "<br/>";
    echo __DIR__ . "<br/>";
    echo __LINE__ . "<br/>";
}
else
{
    echo "Site is closed for maintenance";
}
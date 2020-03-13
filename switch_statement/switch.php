<?php
/*
    switch(Expression)
    {
        case:
            // Code
        break;
    }
*/

$browser = "Google Chrome";


switch($browser)
{
    case "Google Chrome":
        echo "Good you are using " . $browser;
        break;

    case "FireFox" :
        echo "Good you using " . $browser;
        break;

    case "Opera" :
        echo "Good you now are using " . $browser;
        break;
    default:
        echo "Your favourite browser isn't here";
        break;
}






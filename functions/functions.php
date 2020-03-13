<?php

/*

    Syntax:
        function #functionName($arg1, $arg2,...)
        {
            // Function Body;
        }



*/
/*
$var = "Seif";
echo gettype($var);




function calculateSalary($userName, $workingDays, $ratePerDay)
{
    echo "Hello ". $userName . "&nbsp;Your Salary Is " . $workingDays * $ratePerDay;
}
echo calculateSalary("Seif", 70, 50);


*/


/*
    Important Note:
        The Starting date variable should be greater than the end date!

*/
/*
function generateYears($startingDate, $endDate)
{
    echo "<select name='years'>";
    for ($i = $startingDate; $i >= $endDate; --$i)
    {
        echo "<option value=". $i .">" . $i . "</option>";
    }

    echo "</select>";
}

generateYears(2020, 1900);



function clacAgeInDays($ageInYears)
{
    $summation = $ageInYears * 365;

    return $summation;
}

echo clacAgeInDays(18);

function getSquare($num)
{
    return $num * $num;
}

echo getSquare(15);

$views = 150;

function increaseViews($views)
{
    return ++$views;
}

echo increaseViews($views) . "<br>";
echo increaseViews($views) . "<br>";
echo increaseViews($views) . "<br>";
echo increaseViews($views) . "<br>";
echo increaseViews($views) . "<br>";
*/


/*
    - The Default is valued arguments should be given at last and important ones should come first.
*/
/*
function sayHi($user, $age = 0, $skills = "Null")
{
    $result = "Hello " . $user . "&nbsp;your age is " . $age . "&nbsp; and your skills are " . $skills;
    return $result;
}
echo sayHi("Seif", 20, " Java, JS, C/C++");
*/


/*
    Function Revision :
        [ 1 ] -->
*/

function checkTicketAge($user, $age)
{
    $ticket = rand(5000, 100000);

    if ($age >= 18)
    {
        $msg  = "Hello " . $user . " your age is " . $age . ",<br>";
        $msg  .= "You are qualified to get the ticket :>" . ",<br>";
        $msg  .= "Your ticket ID is [" . $ticket . "].<br>";

        return $msg;
    }
    else
    {
        $msg  = "Hello " . $user . " your age is " . $age . "<br>";
        $msg  .= "You are not qualified to get the ticket :(" . "<br>";

        return $msg;
    }

}


function makeFrame( $element)
{
    $frame = "<div class='nice-frame'>";
    $frame .= $element;
    $frame .= "</div>";

    return $frame;
}

$idGet = checkTicketAge("Seif", 18);
$myElement = makeFrame($idGet);

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .nice-frame
            {
                border: 1px solid #CCCCCC;
                background-color: #EEEEEE;
                padding: 10px;
                border-radius: 5px;
                font-family: Arial, Tahoma;
                width: 400px;
                margin: 30px auto;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
            echo $myElement;
        ?>
    </body>
</html>






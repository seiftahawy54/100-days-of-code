<?php

echo "<title>Operators in PHP</title>";

/*
 * Arithmetic Operators
 * [ + ]
 * [ - ]
 * [ * ]
 * [ % ]
 * [ / ]
*/

/*
$var1 = 10;
$var2 = 2;

echo $var1 ** $var2 . "<br>";
*/
// phpinfo();

/*
 * Assignment Operators
 */
/*

$var3 = 100;
$var3 += 200;

echo $var3 . "<br>";

$fullName = "Seif";
$fullName .= " Hesham";
$fullName .= " Salem";
*/



// Comparison

/*
 *  [ == ]  Equals
 *  [ != ]  not equal
 *  [ === ] Identical
 *  [ !== ] Not identical
 *  [ < ]   Less than
 *  [ <= ]  Less than or equal
 *  [ > ]   Larger than
 *  [ >=]   Larger than or equal
 */

/*
$a = 100;
$b = "100";
echo gettype($a) . "<br>" . gettype($b) . "<br>";

if ($a == $b)
{
    echo 'true';
} else {
    echo 'false';
}


*/

// Increment/Decrement(Update) Operators

/*
 *      [ ++$ ] Pre-increment
 *      [ $++ ] Post-increment
 *      [ $-- ] Pre-decrement
 *      [ --$ ] Post-decrement
 */

/*
$var = 10;

echo --$var . "<br>";
echo --$var . "<br>";
echo --$var . "<br>";
echo --$var . "<br>";
echo --$var . "<br>";

echo "<br>";
echo "<br>";
echo "<br>";

$var2 = 20;

echo $var2-- . "<br>";
echo $var2-- . "<br>";
echo $var2-- . "<br>";
echo $var2-- . "<br>";
echo $var2-- . "<br>";
*/

/*
    Logical Operators

    [ and ]         Anding of all conditions.
    [ && ]          Conditioning of all Three values is true then execute.
    [ xor ]         If all conditions are met don't execute, Else if only one is true so EXECUTE.
    [ || && or ]    If the is only one condition is true execute the wanted code.
    [ ! ]           Deny the condition.

*/

/*
$empFirstName = "Ahmed Hesham ";
$age = 10;
$yearsOfExperience = 1;
$haveCar = false;



if ( $age >= 25 && $yearsOfExperience >= 5 && $haveCar)
{
    echo "First Name: " . $empFirstName . "Accepted: Senior";
}
else if ( $age >= 22 && $yearsOfExperience >= 2 || $haveCar)
{
    echo "First Name: " . $empFirstName . "Accepted: Junior";
}
else if ( $age >= 18 && $yearsOfExperience >= 1 || $haveCar)
{
    echo "First Name: " . $empFirstName . "Accepted: Trainee";
}
else
{
    echo "First Name: " . $empFirstName . "Rejected: Not Qualified";
}



$var1 = true && false;
$var2 = true and false;

echo "<br>";

var_dump($var1, $var2);
*/

/*
$employeeAge = 28;
$yearsOfExperience = 5;
$spokenLanguages = 3;

if ( $employeeAge > 28 || $yearsOfExperience > 4 || $spokenLanguages >= 2 )
    echo "Accepted Senior";
else if ( $employeeAge > 25 || $yearsOfExperience > 2 || $spokenLanguages >= 1 )
    echo 'Accepted Junior';
else if ( $employeeAge > 21 || $yearsOfExperience >= 0 || $spokenLanguages >= 0)
    echo "Accepted Trainee";
else
    echo "Rejected";
*/

// [ @ ] Error Control Operator

// $file = @fopen("seif.txt", 'r') or die("This file is not found.");
// @(include("clude.php"))or die("This file or files is not found.");

$server = "localhost";
$user   = "Seif";
$pass   = "HelpPHP";
$db     = "OurDataBase";


@mysqli_connect($server, $user, $pass, $db) or die("There is something wrong in connection.");



























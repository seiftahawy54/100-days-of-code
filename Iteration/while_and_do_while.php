<?php
/*
 *
 * Syntax:
 *      while( condition )
 *      {
 *          code to execute;
 *      }
 *
 *      OR
 *
 *      while( condition ):
 *          code to execute;
 *      endwhile
 *
 * ========================== Do While loop ==========================
 *
 * Syntax
 *      do
 *      {
 *          Loop Body;
 *      } while ( condition );
 *
 * =========================== Foreach loop ==========================
 * Syntax [1] for indexed array :
 *      foreach ( $array as Value )
 *      {
 *          Loop Body;
 *      }
 *
 * Syntax [2] for Associative array :
 *      foreach ($array as $Key => Value)
 *      {
 *          Loop Body;
 *      }
 *
*/

/*
$i = 1;


while ( $i <= 20):

    echo "<div>". $i . "</div>";
    $i++;
endwhile;


$i = 1;

do {
    echo $i . "<br>";
    $i++;
} while($i <= 20);






$countries = array("Egypt", "Saudi Arabia", "Germany", "Canada", "Austria", "Luxembourg");

foreach ( $countries as $value )
{
    echo $value . ", ";
}

*/

$friends = array(
    "Shadood" => "Shady Zekry",
    "Ta7 Ta7" => "Seif Tahawy",
    "7ema"  => "Abdelrahman Ahmed",
    "Rmdan"  => "Abdo Ramadan",
    "El Norm" => "Seif Emara",
    "Foa'sh" => "Abdelrahman Foad",
    "Sheko" => "Sherif Hesham");

foreach ( $friends as  $key => $value)
{
    echo $key . " &nbsp;&nbsp;&nbsp; => " . $value . "<br>";
}



















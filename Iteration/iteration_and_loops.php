<?php
/* Iteration In PHP */

/*
 * Syntax:
 *  for (Initialization; Condition; Update) {
 *      Code to Execute;
 *  }
 *
 */


for ($i = 10; $i < 20; $i++)
{
    echo $i . " ";
}

?>

<h1>Select your Birth Date</h1>

<select name="years">
    <?php
        for ($i = 2020; $i >= 1980; $i--)
        {
            echo "<option value=". $i .">". $i ."</option>";
        }
    ?>
</select>


<select name="month">
    <?php
    for ($i = 1; $i <= 12; $i++)
    {
        echo "<option value=". $i .">". $i ."</option>";
    }
    ?>
</select>

<select name="days">
    <?php
    for ($i = 1; $i <= 31; $i++)
    {
        echo "<option value=". $i .">". $i ."</option>";
    }
    ?>
</select>

<?php

$langs = array("HTML", "CSS", "JavaScript", "Python", "C/C++", "Java");
$languagesNumber = count($langs);


echo $languagesNumber;

echo "<ul>";

for ($i = 0; $i < count($langs); $i++)
{
    echo "<li>". $langs[$i] . "</li>";
}

echo "</ul>";


$i = 1;

for ( ; ; )
{
    if ($i < 20)
    {
        echo $i . "<br>";
        $i++;
    }
    else
        break;
}














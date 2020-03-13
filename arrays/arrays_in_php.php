<?php

/*
    Arrays In PHP :
        ==> To save a a lot of time.
        ==> To keep huge number of data in one place.
        ==> It has two types:
            -> Numeric          arrays.
            -> Associative      arrays.
            -> Multidimensional arrays.

*/


$worker1 = "Seif";
$worker2 = "Shady Ze2ry";
$worker3 = "Ali Waleed";

echo "<h2>Our Workers</h2>";
echo "<ul>";
echo "<li>". $worker1 ."</li>";
echo "<li>". $worker2 ."</li>";
echo "<li>". $worker3 ."</li>";
echo "</ul>";


/* Indexed Arrays */
/*
    Syntax:
        $variableName = array(value-1, value-2, value-3, ..., value-n);

*/

function printWorkers($workers)
{
    echo "<pre>";
    echo "<h2>Our Workers</h2>";
    echo "<ul>";
    foreach ($workers as $worker)
    {
        echo "<li>" . $worker . "</li>";
    }
    echo "</ul>";
    echo "</pre>";
}

function searchOnWorker($workers, $nameToFind)
{
    for ($i = 0; $i < count($workers); $i++)
    {
        if ($workers[$i] == $nameToFind)
        {
            return $i;
        }
    }

    return null;
}


$workers = array("Seif Hesham", "Mostafa Nagy", "Shady Zekry", "Abdelrahman Ahmed",
    "Sherif Hesham");

printWorkers($workers);

echo "<pre>";
print_r($workers);
echo "</pre>";


echo searchOnWorker($workers, "Seif Hesham");


/*
    Associative Arrays:
        Syntax:
            $variableName = array(
                key => value-1,
                key => value-2,
                key => value-3,
                ....,
                key => value-n
            );

    Important Note : Key Must Be Unique, Values could be the same.

*/
$programmingLanguages = array(
    "C/C++"         => "75%",
    "JS"            => "50%",
    "PHP"           => "30%",
    "Python"        => "60%",
    "Scala"         => "0%",
    "Objective-C"   => "0%",
    "Ruby"          => "0%");

$programmingLanguages["MySQL"] = "33%";

echo "<ul>";
echo "<pre>";
foreach ($programmingLanguages as $lang => $val)
{
    echo "<li>" . $lang . " => " . $val ."</li>";
}
echo "</pre>";
echo "</ul>";
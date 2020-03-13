<?php
/*
$indexedArrays = array(
    "Seif", "Shady", "Sherif", "7ema", "Gemy", "Fo'sh"
);

$salaries = array(
    "Seif" => "1700$",
    "Shady" => "2000$",
    "Sherif" => "1500$",
    "7ema" => "1800$",
    "Gemy" => "-200$",
    "Fo'sh" => "1300$"
);

$indexedArrays[] = "Ahmed Tamer";
echo $indexedArrays[3] . "\n";
echo "<pre>";
print_r($indexedArrays);

foreach ($salaries as $person => $salary)
{
    echo $person . " => " . $salary . "\n";
}
echo "</pre>";

*/

$diet = array(

    "Day1" => array("Banana", "Apples", "Bread"),
    "Day2" => array("Meat", "Oats", "Yogurt"),
    "Day3" => array("Tuna", "Fruit Salad", "Greek Olives", "Egyptian Dates")

);


echo "<pre>";
print_r($diet);

foreach ($diet as $day => $food)
{
    echo "<h3>In " . $day . " I will Eat : </h3>";
    foreach ($food as $item)
    {
        echo "- " . $item . "\n";
    }
}

echo "</pre>";

















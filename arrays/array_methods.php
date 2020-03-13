<?php

/*
    Array Methods:
*/

/*
$array = array(
    "Java",
    "Python",
    "C/C++",
    "Haskell",
    "JavaScript",
    "PHP",
    "Ruby"
);



Syntax:
    in_array( #needle, #HayStack, #Type[Bool] );
    --> Searching an element[needle] in a given arr[HayStack] then returns Boolean Value if found.


if (in_array("C/C++", $array, true))
{
    echo "Yes Its Exists";
}


/*
Syntax:
array_search( #needle, #HayStack, #Type[Bool] );
    --> Searching an element[needle] in a given arr[HayStack] then returns Position of Value if found.

$lang = array_search("C/C++", $array, true);
echo $lang;



Syntax:
    array_key_exists( #needle, #HayStack );


if (array_key_exists(2, $array))
{
    echo "Yes It's found";
}

*/

// <?php

function printPreCodedArr($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


/*

    Syntax:
        array_push(#arrayName, #value_1, #value_2, ...., #value_n);
        --> This Function Pushes the value you want to last position in the array. // Like STACKS in Data Structures.
        ** Note: The first value is mandatory .
*/

$languagesILove = array(
    "Java",
    "Python",
    "C/C++",
    "Haskell",
    "JavaScript",
    "PHP",
    "Ruby"
);

printPreCodedArr($languagesILove);

array_push($languagesILove, "Go", "Scala", "Ajax", "MySQL");

printPreCodedArr($languagesILove);

/*
    Syntax:
        array_unshift(#arrayName, #value_1, #value_2, ...., #value_n);
        --> This Function position the value you want to first position in the array.
        ** Note: The first value is mandatory .

*/


printPreCodedArr($languagesILove);
array_unshift($languagesILove, "JSON", "Assembly");
printPreCodedArr($languagesILove);


/*
Syntax:
    array_pop(#arrayName);
        --> Removes the last element in the array.
        Note: last element could be returned in this function.
    array_shift(#arrayName);
        --> Remove the first element in the array.
        Note: last element could be returned in this function.
*/

$languagesILove = array(
    "Java",
    "Python",
    "C/C++",
    "Haskell",
    "JavaScript",
    "PHP",
    "Ruby"
);

printPreCodedArr($languagesILove);

$lastLanguage = array_pop($languagesILove);
printPreCodedArr($languagesILove);

$firstLanguage = array_shift($languagesILove);
printPreCodedArr($languagesILove);

echo $lastLanguage . "<br>" . $firstLanguage;


/*
Array Sorting:
    Type 1:
        Sort :
            Syntax : sort(#arrayName, #sorting_type);
            * For indexed arrays.
    Type 2:
    Reverse Sort :
        Syntax : rsort(#arrayName, #sorting_type);
        * For indexed arrays.
    Type 3:
    Sort :
        Syntax : asort(#arrayName, #sorting_type);
        * For associative array.
    Type 4:
    Sort :
        Syntax : arsort(#arrayName, #sorting_type);
        * For associative array.
   Type 5:
    Sort :
        Syntax : krsort(#arrayName, #sorting_type);
        * For associative array's key.
   Type 6:
    Sort :
        Syntax : krsort(#arrayName, #sorting_type);
        * For associative array's key.
*/

$languagesILove = array(
    "Java",
    "Python",
    10,
    "C/C++",
    20,
    "Haskell",
    "JavaScript",
    "PHP",
    "Ruby",
    15,
);


printPreCodedArr($languagesILove); // Array Before Sorting.
rsort($languagesILove, SORT_STRING);

printPreCodedArr($languagesILove); // Array After Sorting.



$languagesILove = array(
    "AngularJS"     => 0,
    "Java"          => 50,
    "Python"        => 30,
    "C/C++"         => 95,
    "Haskell"       => 15,
    "JavaScript"    => 70,
    "PHP"           => 50,
    "Ruby"          => 0,
);


printPreCodedArr($languagesILove); // Array Before Sorting.

krsort($languagesILove, SORT_REGULAR);

printPreCodedArr($languagesILove); // Array After Sorting.


/*
    Array Reverse:
        Syntax:
            array_reverse(#arrayName, Preserve);
    Array Shuffle:
        Syntax:
            shuffle(#arrayName, Preserve);
*/


$languagesILove = array(
    "AngularJS",
    "Java",     // I have lied here :"D, I hate java :"D.
    "Python",
    "C/C++",
    "Haskell",
    "JavaScript",
    "PHP",
    "Ruby",
);


printPreCodedArr($languagesILove); // Array Before Reverse
$reversed = array_reverse($languagesILove, true);
printPreCodedArr($reversed);       // Array After Reverse


printPreCodedArr($languagesILove); // Array Before Shuffling
shuffle($languagesILove);
printPreCodedArr($languagesILove);       // Array After Shuffling


/*
    Array fill:
        Syntax:
            array_fill(#indexed_to_fill, #number, #value);

*/


$languagesILove = array(
    "AngularJS",
    "Java",     // I have lied here :"D, I hate java :"D.
    "Python",
    "C/C++",
    "Haskell",
    "JavaScript",
    "PHP",
    "Ruby",
);

$array = array_fill(0, 10, "Seif");
printPreCodedArr($array);



/*
    Array Sum:
        array_sum(#array_name);

*/

$bunchOfNumbers = array(32,189,156,"Seif",23);

$sum = array_sum($bunchOfNumbers);

printPreCodedArr($bunchOfNumbers);
echo $sum;


/*
    Array Random:
        array_rand(#array_name, #number_of_values_to_return);
*/


$myFriends = array(
    "Seif Hesham",
    "Mostafa Nagy",
    "Shady Zekry",
    "Sherif Hesham",
    "Abdelrahman Ahmed",
    "Abdelrahman Gamal"
);

printPreCodedArr($myFriends);
$getRandom = array_rand($myFriends, 3);
echo $myFriends[$getRandom[0]] . "<br>";
echo $myFriends[$getRandom[1]] . "<br>";
echo $myFriends[$getRandom[2]] . "<br>";



/*
    Array Unique:
        Syntax:
            array_unique(#array_name, #sorting_type);
*/

$array = array(
    "Seif",
    "Seif",
    "Shady",
    "Ramadan",
    "Abdelrahman",
    "Abdelrahman"
);

$unique = array_unique($array);

printPreCodedArr($unique);







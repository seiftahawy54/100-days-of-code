<?php

function printPreCodedArr($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function printWithNewLine($functionName, $string)
{
	echo "(" . $functionName .") : " . $string . "<br>";
}

/*
    Explode:
        explode(#separator, #string, #limit);

    ==> This function separates the string into pieces to deal with them alone.
    ==> #limit : is the maximum number of the elements you want to separate.

*/

/*
$str = "Hello, I, Love, PHP, and, JS, C++, Too, Much";
echo $str . "<br>";

$arr = explode(",", $str, 2);

echo "<pre>";
print_r($arr);
echo "</pre>";
*/

/*
    Implode String Function:
        implode(#separator, #array);
        join(#separator, #array);
        ==> This function returns a string to use not an array like the top function.
        --> The separator isn't required.
        --> join: is the alias name of function implode.

*/

/*
$moderatorsArr = array("Seif", "Shady", "Ahmed Khaled", "Sherif", "7ema");

$moderatorsString = implode(" & ", $moderatorsArr);

echo    "<div style='font-family: Consolas'>" .
        "Hello our moderators here to help you names is: " .
        $moderatorsString .
        "</div>";
*/

/*
    String Split:
        str_split(#string, #length);
        ==> This function cuts(Splits) the string into array of characters.
        ==> #length: is how many characters will be in the single cell in the array.

*/
/*
$myPowerfulString = "Hello i love programming a lot";

echo $myPowerfulString . "<br>";

$myArrayTheHolderOfPowerfulString = str_split($myPowerfulString, 3);

printPreCodedArr($myArrayTheHolderOfPowerfulString);
*/
/*
    Chunk Split:
        chunk_split(#string, #length, #end);
        ==> This function make the string like a little pieces from the string.
        ** #string: Required.
        ** #length: Optional, default value is 76, Like length of str_split function.
        ** #end: Optional, default value is \r\n, and it is the separator of the string.
*/

/*
$myPowerfulString = "Hello i love programming a lot";

echo $myPowerfulString . "<br>";

$myArrayTheHolderOfPowerfulString = chunk_split($myPowerfulString,2, "-");

echo $myArrayTheHolderOfPowerfulString;
*/

/*
    String Replace:
        str_replace(#search, #replace, #string, #count);

        [ #search ]    : It could be an array, Required.
        [ #repalce ]   : It could be an array, Required.
        [ #string ]    : Required.
        [ #count ]     : Required.

*/

/*
$str = "I love programming and problem solving, like php, I love php so much because php is easy and fun
to learn";

echo "<div style=\"font-family: 'Linux Biolinum G'\">";

echo $str . "<br>";

// $str = explode(' ', $str);

$str = str_replace(array("php", "is"), array("A", "B", "C", "D"), $str);

printPreCodedArr($str);


printPreCodedArr($str);
$str = implode(" ", $str);
echo $str;

echo "</div>";

$str = "Line 1\nLine 2\n\rLine 3\nLine 4\r";

$order = array("\n", "\n\r", "\r");

echo $str . "<br>";

$str = str_replace($order, "<br/>", $str);

echo $str;
*/

/*
    String Repeat:
        str_repeat(#string, #repeat);
        [ #string ] : Required.
        [ #repeat ] : Required.
    String Shuffle:
        str_shuffle(#string);
    String Length:
        strlen(#string);

*/

/*
$str = "Seif ";

$repeat = str_repeat($str, 15);
$myShuffedString = str_shuffle($str);
$strlength = strlen($str);

echo $strlength;
*/

/*
    Add Slashes:
        addslashes(#string);
    Strip Slashes:
        stripslashes(#string);
    Strip Tags:
        strip_tags(#string, #allow);
*/
/*
$string = "Today 'i'\ 'w'i\l\l\ come at 8 O'clock";

echo $string . "<br>";

$skipped = addslashes($string);
echo $skipped . "<br>";

$clean = stripslashes($string);
echo $clean;

echo "<div style=\"font-family: 'Linux Biolinum G'\">";

$str = "I love <b>PHP</b> go to <a href='https://www.php.net' target='_blank'>php.net</a> for more information. <br/>";
echo $str;

$stripTags = strip_tags($str, "<a><b>");

echo $stripTags;

echo "<div>";
*/
/*
	String to lower case:
		strtolower(#string);
	String to upper case:
		strtoupper(#string);
	Lower Case First Character:
		lcfirst(#string);
	Upper Case First Character:
		ucfirst(#struing);
	Upper Case Words:
		ucwords(#string);
		** Converts the first characters in all words to uppercase letters.
	
*/

/*
$string = "hello, people i love php so much.";
$lower = strtolower($string);
$upper = strtoupper($string);
$lcfirst_str = lcfirst($string);
$ucfirst_str = ucfirst($string);
$ucwords_str = ucwords($string);

echo "<div style=\"font-family: 'Linux Biolinum G'\">";

printWithNewLine("Default string", $string);
printWithNewLine("strtolower", $lower);
printWithNewLine("strtoupper", $upper);
printWithNewLine("lcfirst", $lcfirst_str);
printWithNewLine("ucfirst", $ucfirst_str);
printWithNewLine("ucwords", $ucwords_str);

echo "<div>";
*/
/*
    Trim a string:
        trim(#string, #charList);
        ** #charList : Optional, Like ['\0', '\t', '\n', '\r', '\x0B', ' '].
    Left Trim:
        ltrim(#string, #charList);
        ** The main difference is the left trims until the first Letter is found.
*/
/*
$myPowerfulString = "This is a text to test string functions, Like 'Hello, world'";

$myPowerfulString2 = " \v\v\v This is a text to test string functions, Like 'Hello, world' \v\v\v ";


echo "<div style=\"font-family: Arial, Tahoma\">"; # Start print the text in beautiful form.

echo var_dump($myPowerfulString) . "<br>";
printWithNewLine("tapped String", $myPowerfulString2);
echo var_dump($myPowerfulString2) . "<br>";

echo "<br>";echo "<br>";

$trimmed = trim($myPowerfulString2);
printWithNewLine("trimmed String", $trimmed);

echo "<br>";echo "<br>";

echo var_dump($trimmed) . "<br>";

echo "<br>";echo "<br>";

$ltrimmed = ltrim($myPowerfulString2);
printWithNewLine("Left trimmed String", $ltrimmed);

echo "<br>";echo "<br>";

$rtrimmed = rtrim($myPowerfulString2);
printWithNewLine("Right trimmed String", $rtrimmed);

echo "<div>"; # End print the text in beautiful form.


$str = "I love programming     ";
echo $str . "<br>";

$trimmed = rtrim($str);
echo $trimmed;

*/
/*
    String String:
        strstr(#string, #search, #before_Search);
        ** BeforeSearch: Optional, means that if you found the needle get the all elements until the needle.
        ** Else is Required.
    String Insensitive String:
        stristr(#string, #search, #before_Search);
        ==> Like the top but the search is case insensitive.
    String character:
        strchr(#string, #search, #before_Search);
        ==> It is alias for strstr() function.
*/

/*
$str = "I love PHP, so much because PHP is cool";
$str2 = "seif@seif.info";

$char = stristr($str, "php", false);

echo $char;
*/

/*
    String Word Count:
        str_word_count(#string, #format, #charList);

    ** [ #format ]      : Optional, Default value is 0, 1 : print the string as Array,
                            2 : print the string as associative array with each word place.
    ** [ #charList ]    : Optional.
*/
/*
$str = "I love php so much as JavaScript";
echo $str;

$str_count = str_word_count($str, 2);
printPreCodedArr($str_count);
*/
/*
============================================================================================================================================================================
*/

/*
    Parse String:
        parse_str(#string, #array);
    New Line To break tag:
        $nl2br(#string, #XHTML);
*/
/*
$link = "name=Seif&age=19&year=2015&skill=2";

parse_str($link, $myArr);

// echo $name;

printPreCodedArr($myArr);


$str = "Hello i love php \n also JavaScript \n";
echo nl2br($str);
*/
/*
    String Position:
        strpos(#string, #find, #offset);
        [ #offset ] : Optional
    String insensitive position:
        stripos(#string, #find, #offset);
        [ #offset ] : Optional
    String right position:
            strrpos(#string, #find, #offset);
            [ #offset ] : Optional
    String right insensitive position:
            strripos(#string, #find, #offset);
            [ #offset ] : Optional

*/
/*
$str = "I love php so much because php is famous and cool language";

$pos = stripos($str, "pHp");

echo $pos;
*/

/*
    String Compare:
        strcmp(#string1, #string2);
        ==> Result = 0: The two strings are equal.
        ==> Result < 0: The first #string1 is larger than the second #string2.
        ==> Result > 0: The first #string1 is smaller than the second #string2.
    String Number Compare:
        strncmp(#string1, #string2, #length);
        ==> The additional 'n' means compare starting from position n.
    String Reverse:
        strrev(#string);

*/

/*
$str1 = "Seif";
$str2 = "PHPPHP";

// echo strncmp($str1, $str2, 4);

echo strrev($str1);
*/



/*
    Sub String:
       substr(#string, #startPosition, #length);
       [ #length ] : Optional Parameter, and its refers to the length of the wanted to cut string.  
*/
/*
$str = "I Love PHP So Much Because PHP is famous and cool.";
$piece = substr($str, 0, 15);

echo $piece;
*/
/*
    Sub String Count:
        substr_count(#string, #substring, #start, #length);
    Sub String Compare:
        substr_compare(#string-1, #string-2, #string-3, #start_position, #length, #letter_case);

*/

$str = "I love PHP so much that is why PHP is cool and easy that is why PHP is the best";

// $count = substr_count($str, "PHP", 0);
// echo $str . "<br />" . $count;

$str1 = "Hello Seif";
$str2 = "Seif";

echo substr_compare($str1, $str2, 0, null, true);







<?php
    /*
        Directory Name:
            dirname(__FILE__);
            ==> Gets the path of the current directory.
        File Exists:
            file_exists(#fileName);
            ==> Checks the file is exists or not this directory.
        File Put Contents:
            file_put_contests(#fileName, #contentToAdd);
            ==> Add content to the file name.
        Is Writable:
            is_writable(#fileName);
            ==> Checks if you have the privilage to write on the file.
    */
    
    
    /*
    $file = "seif.txt";

    if (is_writable($file))
    {
        echo "Good the file [ " . $file . " ] is writable.";
        file_put_contents($file, "The file is writable");
    }
    else
    {
        echo "Sorry the file [ " . $file . " ] is'nt writable so i can't modify it.";
        file_put_contents($file, "The file is ");

    }
    

    /*
        Make Directory:
            mkdir(#directoryName);
        Remove Directory:
            rmdir(#directoryName);
        Is Directory:
            is_dir(#directoryName);
    */

    /*
    $clientName = "Seif Tahawy";
    // mkdir($clientName);
    if (is_dir($clientName))
    {
        rmdir($clientName);
        echo "The directory " . $clientName . " is removed.";
    }
    else
    {
        echo "There is no directory with this name.";
    }
    */

    /*
        Directory Name:
            dirname(#path);
            ==> Returns the directory name.
            [ __FILE__ ] : is constant variable to get the current path.
        Base Name:
            basename(#path, #suffex);


        Notes:
            __DIR__ : is a contast varaible do what "dirname(__FILE__);" Function do excalty.
            In PHP 7 : there is a optional parameter in "dirname(#path, #level);" to select how many back steps you want and this is how it is written in the documentation
            "dirname ( string $path [, int $levels = 1 ] ) : string".
            
    */

    /*
    echo "<div>Current directory : " . __FILE__ . "</div>";
    echo dirname("C:/xampp/htdocs/php_course/Files/files_in_php.php");
    echo "<div>" . dirname(__FILE__, 1) . "</div>";
    include  __DIR__ . "\inc\\test.php";
    */

    /*
    echo basename(__FILE__, '.php');
    echo "<br/>your file name is : " . basename(__FILE__, '.php');
    */
    /*if (basename(__FILE__, '.php') === 'files_in_php')
    {
        echo "Good your file is now ready";
    }
    else
    {
        echo "Sorry, Your file is not ready";
    }*/



    
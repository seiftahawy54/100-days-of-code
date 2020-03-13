<?php

	/*
	Steps to create directory :-

		[ 1 ] : checking if the directory is exits.
		[ 2 ] : Create the directory.
		[ 3 ] : Assign directory to a variable.
		[ 4 ] : Create a file inside this directory.
		[ 5 ] : Assign file to a variable.
		[ 6 ] : Change mode of this file to be read only.
		[ 7 ] : Chech if the file is writable.
		[ 8 ] : Change it's mode to writable.
		[ 9 ] : Include this file.
	*/

	if (file_exists(__DIR__ . '\PHP'))
	{
		echo "Sorry this file isn't exists";
	}
	else
	{
		mkdir(__DIR__ . '\PHP');
		echo "yes";
	}

	$directory = __DIR__ . '/PHP/';

	echo '<br />' . $directory;

	//@file_put_contents($directory . 'text.php', "Hello World from php stream buffer file")
	 	// or die ("<div>Permision isn't allowed.</div>");

	$myFile = $directory . 'text.php';

	echo '<br />' . $myFile;

	chmod($myFile, 0444);

	if (is_writable($myFile))
	{
		@file_put_contents($myFile, "<?php
			echo 'Seif is here.';") or die ("Peremsion isn't allowed.");
	}
	else
	{
		chmod($myFile, 0755);
		@file_put_contents($myFile, "<?php
			echo 'Seif is here.'; ") or die ("Peremsion isn't allowed.");
	}

	require $myFile;
<?php

	/*
		File Put Contents:
			file_put_contents(#fileName, #data, #mode, #context);
			File Modes:
				FILE_APPEND:
					=> Adds the data in the last place of the pointer.
				FILE_USE_INCLUDE_PATH:
					=> PHP7 Documentation:
						Specifies a list of directories where the require, include, fopen(), file(), readfile() and file_get_contents() functions look for files.
				LOCK_EX:
					=> Makes me execlusivly writing in this file.

	*/

	/*
	chmod("seif.txt", 0600);
	file_put_contents("seif.txt", "\n\"Testing\";", FILE_APPEND | LOCK_EX);
	file_put_contents("seif.txt", "\"sssssssssssss\";\n", FILE_USE_INCLUDE_PATH);
	*/


	/*
		File Get Contents:
			file_get_contents(#path, #include_path, #context, #offset, #max_length);
	*/

	// chmod("seif.txt", );
	// echo file_get_contents("seif.txt", False, NULL, 6, 6);
	// var_dump(file_get_contents("seif.txt", False, NULL, 6, 10));

	/*
		Copy Files:
			copy(#oldFile, #newFile);
		Rename Files and directories:
			rename(#oldName, #newName, #context);
	*/
	// rename('seif.txt', 'tahawy.txt');

	// Create Backup current file.

	copy(__FILE__, __DIR__ . "/PHP/Backup/mainReturn.bak");

	
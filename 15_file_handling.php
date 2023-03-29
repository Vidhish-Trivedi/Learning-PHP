<?php

    /* ---------- File Handling --------- */
    
    $file = "extras/users.txt";

    /* 
      File handling is the ability to read and write files on the server.
      PHP has built in functions for reading and writing files.
    */

    // File Open, Read, Write, Close
    if(file_exists($file)) {
        // echo readfile($file);

        $handle = fopen($file, "r");        // Returns a pointer.
        $contents = fread($handle, filesize($file));

        fclose($handle);

        echo $contents;
    }
    else{
        $handle = fopen($file, "w");
        $contents = "Brad" . PHP_EOL . "John" . PHP_EOL . "Sarah" . PHP_EOL . "James" . PHP_EOL . "Ash";
        fwrite($handle, $contents);

        fclose($handle);
    }
    
    // if(file_exists($file)) {
    //   // Returns the content and number of bytes read from the file on success, or FALSE on failure.
    //   echo readfile('extras/users.txt');
    // }
    
    /*
    r	- Open a file for read only. File pointer starts at the beginning of the file
    w	- Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    a	- Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
    x	- Creates a new file for write only. Returns FALSE and an error if file already exists
    r+ -	Open a file for read/write. File pointer starts at the beginning of the file
    w+ -	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    a+ -	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
    x+	- Creates a new file for read/write. Returns FALSE and an error if file already exists
    */

?>

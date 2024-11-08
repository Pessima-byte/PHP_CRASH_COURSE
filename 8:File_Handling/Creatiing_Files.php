<?php

$My_File = fopen("NewFile.txt", "w+") or die("Unable To Create File");

// Write to the file
fwrite($My_File, "Tommy is the most sensible in the world of the human");

rewind($My_File);

$Data = fread($My_File,filesize("NewFile.txt"));

echo "<h1>$Data</h1>";

// Close the file
fclose($My_File);
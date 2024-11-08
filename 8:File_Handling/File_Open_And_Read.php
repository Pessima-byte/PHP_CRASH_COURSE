<?php

$My_File= fopen("NoteBook.txt","r") or die ("Unable to open");

$Data=fread($My_File,filesize("NoteBook.txt"));

echo "<h1>$Data</h1>";

fclose($My_File);
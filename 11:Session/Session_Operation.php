<?php

//Creates The session
session_start();

//Creates the Session Variable
$_SESSION["User"]=["Tom","John"];

//This delete a specific session variable
unset($_SESSION["User"][0]);

echo "<h1>".$_SESSION["User"][0]."</h1>";
echo "<h1>".$_SESSION["User"][1]."</h1>";

//This deletes all session variable
session_unset();

//This stop the session
session_destroy();


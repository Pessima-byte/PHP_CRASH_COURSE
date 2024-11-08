<?php

//This is Setting the Cookie name , value and expire time (5min)
setcookie("User","Tommy",time() + 60 * 5);

$Value= $_COOKIE["User"];

echo "<h1>$Value</h1>";


//This Deletes the cookie by setting backwards time
setcookie("User","Tommy",time() -3000);

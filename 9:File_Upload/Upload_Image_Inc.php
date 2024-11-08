<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    //This is to extract the Image name 
    $FullImageName= $_FILES["Image"]["name"];

    //This line extracts the extension
    $ext= strtolower(pathinfo($FullImageName,PATHINFO_EXTENSION));

    //This line extract the Temp location of the image 
    $temp = $_FILES["Image"]["tmp_name"];

    //This line Concetenate the Name and the extention
    $Profile_Name="Tom".".".$ext;

    //This creates the intended location of the uploaded image
    $Img_Loc="./".$Profile_Name;

    //This move the image from temp location to the actually intended location
    move_uploaded_file($temp,$Img_Loc);

    header("Location:http://localhost/PHP_CRASH_CROUSE/9:File_Upload/Upload_Image.php?Upload=Sucessfull");
}
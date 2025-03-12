<?php

header("Content-Type: text/html");

if(isset($_FILES["file"])) {
    $target_directory = "uploads/";
    $file = basename($_FILES["file"]["name"]);
    $file_name =explode(".",$file)[0];
    $extension=explode(".",$file)[1];
    $upload_location = $target_directory . $file_name . date("y-i-sa") . "." . $extension;
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $upload_location)){
        echo "File uploaded successfully: ";
    } else {
        echo "Couldn't upload file";
    }
} else {
    echo "Nothing is here ";
}


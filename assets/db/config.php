<?php

    $SERVER = "localhost";
    $USER = "root";
    $PASSWORD = "";
    $DATABASE = "shovon";

//    $SERVER = "localhost";
//    $USER = "whistle2_new";
//    $PASSWORD = "sC@@;Li?;B_}";
//    $DATABASE = "whistle2_whistlebd";

    $connection = mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE);

    if (!$connection){
        die("Connection failed: ". mysqli_connect_error());
    }

?>
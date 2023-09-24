<?php

    $database= new mysqli("localhost","root","Abcd1234@","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
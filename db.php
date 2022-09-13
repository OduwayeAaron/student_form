<?php
/*
    $servername = "localhost";
    $username = "root";
    $userpassword = " ";
    $dbName = "ogad_students";

    $conn = mysqli_connect($servername, $username, $userpassword, $dbName);

    */
    $conn = mysqli_connect('localhost', 'root', '', 'ogad_students');

    if(!$conn){
       die('Connection failed' . mysqli_connect_error());
    }

?>
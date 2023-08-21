<?php
 
 $localhost = "localhost";
 $username = "root";
 $password = "";
 $dbname="db_data";
 
 // Create connection
 $conn = new mysqli($localhost, $username, $password, $dbname);
 
 // Check connection

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    echo "Connected successfully......." . "<br>";
 
?>
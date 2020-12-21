<?php
  $servername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "young_heroes";

  //connecting to database
  $connection = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
  
  //error message if connection fails
  if(!$connection){
    die("Connection failed: ".mysqli_connect_error());
  }
?>
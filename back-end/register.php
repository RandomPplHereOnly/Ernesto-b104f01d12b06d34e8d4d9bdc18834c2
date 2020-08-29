<?php

if(isset($_GET['username']) && isset($_GET['password']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mgk";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO user (username, password)
    VALUES ('" . $_GET['username'] . "', '" . $_GET['password']. "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
}

?>
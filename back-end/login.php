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

    $sql = "SELECT username, password FROM user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row['username'] == $_GET['username'] && $row['password'] == $_GET['password']){
                    $sql = "UPDATE user SET browser='".$_SERVER["HTTP_USER_AGENT"]."' WHERE username='". $_GET['username']."'";
                    if ($conn->query($sql) === TRUE) {
                        echo "success";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                }
            }
        } else {
            echo "0 results";
        }
    } else {
    echo "0 results";
    }

}

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "knctuserdata";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["SUBMIT"])){


    $sql = "INSERT INTO userinfo (user_name, user_phone, user_email, user_message)
    VALUES ('".$_POST["user_name"]."','".$_POST["user_phone"]."','".$_POST["user_email"]."','".$_POST["user_message"]."')";
    
    if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }
    
    $conn->close();
    }
    ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Usersdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$login1 = $_REQUEST['Uname'];
$login2 = $_REQUEST['Pword'];
$login3 = $_REQUEST['Mail'];

$sql = "INSERT INTO people (Uname,Pword,Mail) VALUES ('$login1', '$login2','$login3')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

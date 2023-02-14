<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "UsersDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$login1 = $_REQUEST['Uname'];
$login2 = $_REQUEST['Pword'];

$sql = "DELETE FROM people WHERE Uname = '" . $login1 . "' AND Pword = '" . $login2 . "'";

if (mysqli_query($conn, $sql)) {
    echo "User deleted successfully";
} else {
    echo "Error deleting user: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
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

$sql = "SELECT * FROM people WHERE Uname = '" . $login1 . "' AND Pword = '" . $login2 . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Welcome " . $row["Uname"];
    }
} else {
    echo "Wrong username or password";
}

mysqli_close($conn);
?>
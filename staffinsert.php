<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO staff (staffid,staffname,staffpost,staffaddress,staffmobile)

VALUES

('$_POST[staffid]','$_POST[staffname]','$_POST[staffpost]','$_POST[staffaddress]','$_POST[staffmobile]')";

 

if ($conn->query($sql) === TRUE) {
    header("Location: staff.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>



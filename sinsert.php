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

$sql="INSERT INTO student (studentid,studentname, fathername,mothername,studentclass,studentaddress,studentmobile)

VALUES

('$_POST[studentid]','$_POST[studentname]','$_POST[fathername]','$_POST[mothername]','$_POST[studentclass]','$_POST[studentaddress]','$_POST[studentmobile]')";

 

if ($conn->query($sql) === TRUE) {
    header("Location: student.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>



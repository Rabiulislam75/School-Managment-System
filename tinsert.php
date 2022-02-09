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

$sql="INSERT INTO teacher (teacherid,teachername,teacheremail,teacherreg,teacheraddress,teachermobile)

VALUES

('$_POST[teacherid]','$_POST[teachername]','$_POST[teacheremail]','$_POST[teacherreg]','$_POST[teacheraddress]','$_POST[teachermobile]')";

 

if ($conn->query($sql) === TRUE) {
    header("Location: teacher.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>



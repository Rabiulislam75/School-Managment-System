<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['opass'])|| empty($_POST['npass'])){
 $error = "Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $opass=$_POST['opass'];
$npass=$_POST['npass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "project");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "Update userpass set pass='$npass' WHERE pass='$opass' AND user='$user'");
 
 header("Location: welcome.php"); // Redirecting to other page

 mysqli_close($conn); // Closing connection
 }
}
?>
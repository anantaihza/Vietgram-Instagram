<?php 

include_once('connection.php');

$username = $_POST["username"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT * FROM user WHERE username= '$username'");

// cek username
if (mysqli_num_rows($result) >0) {
    // cek password
    // password_verify($password, $row["password"]) kalau pake hash

	$row = mysqli_fetch_assoc($result);
	if ($password == $row["password"]) {

        //session
		session_start();
		$_SESSION['username'] = $username; 

		header("location: feed.php");	
	} 
	
} else {
	header("location: index.php");
}

?>
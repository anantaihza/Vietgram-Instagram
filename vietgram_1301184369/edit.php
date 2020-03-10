<?php 
include_once('connection.php');

//function update($data) {
	session_start();
	$usernameOld = $_SESSION['username'];

	// $usernameNew = $_POST['user-name'];
	$nameNew = $_POST['full-name'];
	$websiteNew = $_POST['website'];
	$bioNew = $_POST['bio'];
	$emailNew = $_POST['email'];
	$phoneNumberNew = $_POST['phoneNumber'];
	$genderNew = $_POST['gender'];

	mysqli_query($conn, "UPDATE profile SET name = '$nameNew', website = '$websiteNew', bio = '$bioNew', email = '$emailNew', phoneNumber = '$phoneNumberNew', gender = '$genderNew' WHERE username = '$usernameOld'");

	
  header('location: profile.php');
//	$cek = mysql_affected_rows($conn);

//	return $cek;
//}



 ?>
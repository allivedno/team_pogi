<?php

require_once("support/config.php");

// var_dump($_POST);
// die;
if (!empty($_POST['pw1']) && !empty($_POST['pw2'])) {
	if ($_POST['pw1'] == $_POST['pw2']) {
	$email = $_POST['email'];
	$password = decryptIt($_POST['pw2']);
	$con->myQuery("UPDATE user SET password='$password' WHERE email = ?",array($email));

	$_SESSION[WEBAPP]['user'] = $email;

	echo "<script>alert('Change password successful'); window.location = 'index.php';</script>";
                        
	} else {
		redirect('index.php');
	}
} else {
		redirect('index.php');
}
?>
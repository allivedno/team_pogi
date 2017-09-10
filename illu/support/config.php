<?php
	session_start();
	date_default_timezone_set("Asia/Manila");
	define("WEBAPP", 'Flowtork');
	//$_SESSION[WEBAPP]=array();
	// function __autoload($class)
	// {
	// 	require_once 'class.'.$class.'.php';
	// }
	function redirect($url)
	{
		header("location:".$url);
	}
	function getFileExtension($filename){
		return substr($filename, strrpos($filename,"."));
	}
// ENCRYPTOR
	function encryptIt( $q ) {
	    $cryptKey  = 'JPB0rGtIn5UB1xG03efyCp';
	    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
	    return( $qEncoded );
	}
	function decryptIt( $q ) {
	    $cryptKey  = 'JPB0rGtIn5UB1xG03efyCp';
	    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
	    return( $qDecoded );
	}
//End Encryptor
/* User FUNCTIONS */
	function isLoggedIn()
	{
		if(empty($_SESSION[WEBAPP]['user']))
		{
			return false;
		}
		else
		{
			return true; }
	}
	function toLogin($url=NULL)
	{
		if(empty($url))
		{
			Alert('Please Log in to Continue');
			header("location: login.php");
		}
		else{
			header("location: ".$url);
		}
	}
	function Login($user)
	{
		$_SESSION[WEBAPP]['user']=$user;
	}
/* End User FUnctions */
//HTML Helpers
	

/* End BOOTSTRAP Helpers */

/* SPECIFIC TO WEBAPP */

function AllowUser($user_type_id){
	if(array_search($_SESSION[WEBAPP]['user']['user_type'], $user_type_id)!==FALSE){
		return true;
	}
	return false;
}

function insertAuditLog($user,$action){
	#user,action,date
	if(file_exists("./audit_log.txt")){
		$user=htmlspecialchars($user);
		$action=htmlspecialchars($action);
		$new_input=json_encode(array($user,$action,date('Y-m-d H:i:s')),JSON_PRETTY_PRINT);
		$file = fopen("./audit_log.txt", "r+");
		fseek($file,-4,SEEK_END);
		fwrite($file, ",".$new_input."\n\t]\n}");
		fclose($file);
	}
	else{
		$file = fopen("./audit_log.txt", "w+");

		$data=json_encode(array("data"=>array(array("NONE","INITIAL START UP",date('Y-m-d H:i:s')))),JSON_PRETTY_PRINT);
		fwrite($file, $data);
		fclose($file);
	}
}


function getEmpDetails($emp_id){
	global $con;
	return $con->myQuery("SELECT * FROM employees WHERE id=? LIMIT 1",array($emp_id))->fetch(PDO::FETCH_ASSOC);
}




/* END SPECIFIC TO WEBAPP */
	require_once('class.myPDO.php');
	$con=new myPDO('flowtork','root','');	
?>
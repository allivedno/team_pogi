<?php
 require_once("support/config.php");
 

$id = $_SESSION[WEBAPP]['user'];
$admin_info = getAdminDetails($_SESSION[WEBAPP]['user']); 


insertAuditLog($admin_info['email'],"{$admin_info['full_name']} Logged out.");
$_SESSION[WEBAPP]['user'] = null;

redirect('index.php');
?>
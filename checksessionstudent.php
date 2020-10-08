<?php
//checksession.php
session_start();
if (isset($_SESSION['username']) &&
$_SESSION['accesslevel']=='student'){
}else{
header ("Location: login.php?msg=Admin must login first");
}
?>
<?php
session_start();//
// verify.php
include "dbconnection.php";
$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="SELECT username,fullname,accesslevel FROM user
WHERE username='$username'
AND password='$password'";
$rs=mysqli_query($conn,$sql);
echo "Mysql error:".mysqli_error($conn);
if(mysqli_num_rows($rs)==1){//jumpa user
$record=mysqli_fetch_array($rs);
//session data
$_SESSION['fullname']=$record['fullname'];
$_SESSION['username']=$record['username'];
$_SESSION['accesslevel']=$record['accesslevel'];
//redirect dashboard
if($record['accesslevel']=='admin'){
header ("Location: adminhome.php");
}else if ($record['accesslevel']=='student'){
header ("Location: homestudent.php");
}
echo "1 user found";
echo "Admin name ".$record['fullname'];
}else{
//redirect login.php
header ("Location: login.php?msg=Login failed");
echo "Username & password not match";
}
?>
<?php
session_start();
// logout.php
if (isset($_SESSION['username'])){
session_destroy();
//this to destroy all session info
header ("Location: login.php?msg=User logged out");
}
else{
header ("Location: login.php?msg=User already logged out");
}
?>
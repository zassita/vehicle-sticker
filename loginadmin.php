<!DOCTYPE HTML>
<html>
<head><title>VEHICLE STICKER APPLICATION</title>
<img src="logo_kuis.png" alt="logokuis" width="1000" height="110" align="center">

<style>
  {
  box-sizing: border-box;
}

body {
  margin: 0;
  text-align: center;

}
/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}
h2{
  text-align: center;
}
form{
  margin: auto;
    border-radius: 5px;
    background-color: #00BFFF;
    padding: 10px 30px;
    width: 500px;
    text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <h1>VEHICLE STICKER APPLICATION FOR KUIS STUDENT</h1>
</div>

Login
<form method="post" action="verifyadmin.php">
Email <input type="text"
name="username"
class="form-control">
Password <input type="password"
name="password"
class="form-control">
<input type="submit" value="Login"
class="btn btn-success">
</form>
<!-- login.php -->
<?php
if (isset($_GET['msg'])){
echo "<div class='alert alert-warning'>";
echo $_GET['msg'];
echo "</div>";
}
?>
</body>
</html>
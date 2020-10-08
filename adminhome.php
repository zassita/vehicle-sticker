<?php
session_start();
include "checksession.php";
?>

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

}
/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: left;
  padding: 16px 18px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.button {
  background-color: blue;
  border: none;
  color: white;
  border-radius: 8px;
  padding: 15px 32px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
}
.button:hover {
		background-color: skyblue;
		color: black;
	}
	.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

 .dropdown:hover .dropbtn {
  background-color: #ddd;
  color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
h2{
	text-align: center;
}

form{
  margin: auto;
    border-radius: 5px;
    background-color: gray;
    padding: 10px 30px;
    width: 500px;
    text-align: center;
}
form{
  margin: auto;
    border-radius: 5px;
    background-color: lightgray;
    padding: 10px 30px;
    width: 500px;
    text-align: center;
}
 footer {
  background-color: black;
  padding: 20px;
  text-align: center;
  color: white;
}
</style>
</head>
<body>

<div class="header">
  <h1>VEHICLE STICKER APPLICATION FOR KUIS STUDENT</h1>
</div>

<div class="topnav">
  <a href="login.php" class="button4">LOGOUT<link href="login.php" rel="stylesheet" type="text/css"></a>
  <div class="dropdown">
  	<button class="dropbtn">INFO
  		<i class="fa fa-caret-down"></i>
  	</button>
  <div class="dropdown-content">
  	<a href="#">Fungsi Bahagian</a>
  	<a href="#">Panduan Pelekat Kenderaan</a>
  	<a href="#">Direktori</a>
  	<a href="syaratpelekat.php">Syarat Pelekat Kenderaan KUIS</a>
  	<a href="peraturanadmin.php">Peraturan Penggunaan Kenderaan Di Dalam KUIS</a>
  	<a href="#">Memo Pelekat Kenderaan Pelajar KUIS Tahun 2020</a>

</div>
</div>
<a href="adminhome.php" class="button1">HOME<link href="adminhome.php" rel="stylesheet" type="text/css"></a> 
</div>

<div class="center">
  <br><br><br><br>
  <form name="studentres" method="get" action="">
   FULLTIME(CAR)<br><br>
<a href="listing.php" class="button">LISTING</a><br><br>
</form>
<br><br>
<form name="studentres" method="get" action="">
   FULLTIME(MOTORCYCLE)<br><br>
<a href="listmotor.php" class="button">LISTING</a><br><br>
</form>
</div>
<br><br><br>
<footer>
  <p>Footer</p>
</footer>
</body>
</html>
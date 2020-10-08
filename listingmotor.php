 <?php
//insertactivity.php
 session_start();
include('checksessionstudent.php');
?>

<html>
<head>
<title>VEHICLE STICKER APPLICATIONt</title>
<img src="logo_kuis.png" alt="logokuis" width="1000" height="110">

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
  <a href="login.php" class="button6">LOGOUT<link href="login.php" rel="stylesheet" type="text/css"></a>
  <div class="dropdown">
    <button class="dropbtn">INFO
      <i class="fa fa-caret-down"></i>
    </button>
  <div class="dropdown-content">
    <a href="#">Fungsi Bahagian</a>
    <a href="#">Panduan Pelekat Kenderaan</a>
    <a href="#">Direktori</a>
    <a href="#">Syarat Pelekat Kenderaan KUIS</a>
    <a href="#">Peraturan Penggunaan Kenderaan Di Dalam KUIS</a>
    <a href="#">Memo Pelekat Kenderaan Pelajar KUIS Tahun 2020</a>
 
</div>
</div> 
<a href="homestudent.php" class="button5">HOME<link href="homestudent.php" rel="stylesheet" type="text/css"></a>
</div>
<?php

     $conn = mysqli_connect("localhost","root","","stickers");

     $name=$_POST['name'];
     $phoneno=$_POST['phoneno'];
     $gender=$_POST['gender'];
     $programme=$_POST['programme'];
     $faculty=$_POST['faculty'];
     $matricno=$_POST['matricno'];
     $address=$_POST['address'];
     $licenseclass=$_POST['licenseclass'];
     $roadtax=$_POST['roadtax'];
     $motorbrand=$_POST['motorbrand'];
     $color=$_POST['color'];
     $cylinderpower=$_POST['cylinderpower'];
     $registration=$_POST['registration'];
     $expirationdate=$_POST['expirationdate'];
         
//sql insert
          $sql="INSERT INTO listingmotor
          (name, phoneno, gender, programme, faculty, matricno, address, licenseclass, roadtax, motorbrand, color, cylinderpower, registration, expirationdate)
          VALUES('$name', '$phoneno', '$gender','$programme','$faculty', '$matricno', '$address', '$licenseclass', '$roadtax', '$motorbrand','$color', '$cylinderpower', '$registration', '$expirationdate')";

$rs=mysqli_query($conn, $sql);
?>

<html>
<head>
     <title>Save Record</title>
</head>
<body>
<?php
if($rs==true){
     echo "The record for $name $matricno is Saved<br>";
}
else{
     echo "The record CANNOT be Saved<br>";
}
?>
<br><br><br>
<footer>
  <p>Footer</p>
</footer>
</body>
</html> 
<?php
session_start();
include "checksession.php";
?>

<?php

$db=mysqli_connect("localhost","root","","stickers");

$query="select name, phoneno, gender, programme, faculty, matricno, address, licenseclass, roadtax, motorbrand, color, cylinderpower,registration, expirationdate
from listingmotor 
order by name asc";

$qr=mysqli_query($db,$query);
if($qr==false){
echo ("Query cannot be executed!<br>");
echo ("SQL Error : ".mysqli_error($db));
}

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
<a href="adminhome.php" class="button5">HOME<link href="adminhome.php" rel="stylesheet" type="text/css"></a>
</div>
<h2>List of student motor</h2><br>

<div class="float-right">
  <form method="get" action=""
    class="form-inline">
    <input type="text" name="keyword" 
    class="form-control"
    placeholder="Enter student name here">
    <button type="submit" class ="btn btn-primary">
    Search</button>
  </form>
</div>
<?php
//filename search.php
//use the previous settings
include "dbconnection.php";

//embed SQL commands
if(isset($_GET['keyword'])){//based on keyword entered
  $keyword=$_GET['keyword'];
  $sql = "SELECT matricno, name, 
       phoneno
        FROM listingcar 
        WHERE name LIKE '%$keyword%'";
}
else{//first time page load, list all
  $sql = "SELECT matricno, name, 
        phoneno
        FROM listingcar ";
}


//execute sql commands that will return result set
$result = mysqli_query($conn, $sql);
echo "Error: ".mysqli_error($conn);

//check records fetched available
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    ?>
  <table class="table table-striped">
    <tr>
      <th>Matrix</th>
      <th>Name</th>
      <th>Program</th>
    </tr>
  <?php
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
        echo "<td> ".$row['matricno'] ."</td>";
        echo "<td> ".$row['name'] ."</td>";
        echo "<td> ".$row['phoneno']."</td>";
        echo "</tr>\n";
    }
    ?>
  </table>
    <?php
} 
else {
    echo "Search not found";
}

//purge dbconnect
mysqli_close($conn);
?>
<?php
if(mysqli_num_rows($qr)==0){
echo ("No record fetched...<br>");
}
else{
?>
<table width="90%" border="1">
 <tr align="center">
 <td>NAME</td>
 <td>PHONE.NO</td>
 <td>GENDER</td>
 <td>PROGRAMME</td>
 <td>FACULTY</td>
 <td>MATRIC.NO</td>
 <td>ADDRESS</td>
 <td>DRIVING LICENSE CLASS</td>
 <td>ROAD TAX END DATE</td>
 <td>MOTOR BRAND</td>
 <td>COLOR</td>
 <td>CYLINDER POWER</td>
 <td>VEHICLE REGISTRATION NO.</td>
 <td>DRIVER'S LICENSE EXPIRATION DATE</td>
 <td>STATUS</td>
 </tr>
<?php
while ($rekod=mysqli_fetch_array($qr)){
?>
<tr>
 <td><?=$rekod['name']?></td>
 <td><?=$rekod['phoneno']?></td>
 <td><?=$rekod['gender']?></td>
 <td><?=$rekod['programme']?></td>
 <td><?=$rekod['faculty']?></td>
 <td><?=$rekod['matricno']?></td>
 <td><?=$rekod['address']?></td>
 <td><?=$rekod['licenseclass']?></td>
 <td><?=$rekod['roadtax']?></td>
 <td><?=$rekod['motorbrand']?></td>
 <td><?=$rekod['color']?></td>
 <td><?=$rekod['cylinderpower']?></td>
 <td><?=$rekod['registration']?></td>
 <td><?=$rekod['expirationdate']?></td>
 

 <td>
 <a href="confirmdeletemotor.php?matricno=<?=$rekod['matricno']?>">DELETE></a>
 <a href="updatemotor.php?matricno=<?=$rekod['matricno']?>">UPDATE></a>
</td>
 </tr>
<?php
}
?>
</table>
<?php
}
?>
<br><br><br>
<footer>
  <p>Footer</p>
</footer>
</body>
</html>
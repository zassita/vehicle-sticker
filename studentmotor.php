 <?php
//insertactivity.php
 session_start();
include('checksessionstudent.php');
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
head {  
  text-align: center;
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
  background-color: black;
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
          background-color: white;
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
    background-color: lightgray;
    padding: 10px 30px;
    width: 500px;
    text-align: left;
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
  <a href="result.php" class="button3">RESULT<link href="result.php" rel="stylesheet" type="text/css"></a>
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
<a href="homestudent.php" class="button1">HOME<link href="homestudent.php" rel="stylesheet" type="text/css"></a> 
</div>

<h2>Registration Form</h2><br>
<form method="post" action="listingmotor.php">
      <table width="500" border="1">
          <tr>
     <td>NAME: <input name="name" type="text" class="form-control"></td>
</tr>
<tr>
    <td>PHONE.NO: <input type="text" name="phoneno" class="form-control"></td>
</tr>
<tr>
     <td>GENDER: <input type="radio" id="male" name="gender" value="male" class="form-control">
     <label for="male">Male</label>
     <input type="radio" id="female" name="gender" value="female" class="form-control">
     <label for="female">Female</label></td>
</tr>
<tr>
     <td>PROGRAMME: <input type="text" name="programme" class="form-control"></td>
</tr>
<tr>
     <td>FACULTY: <input type="radio" id="asasi" name="faculty" value="asasi" class="form-control">
     <label for="asasi">Asasi</label>
     <input type="radio" id="fpm" name="faculty" value="fpm"  class="form-control">
     <label for="fpm">FPM</label>
     <input type="radio" id="fppi" name="faculty" value="fppi"  class="form-control">
     <label for="fppi">FPPI</label>
     <input type="radio" id="fstm" name="faculty" value="fstm"  class="form-control">
     <label for="fstm">FSTM</label>
     <input type="radio" id="fsu" name="faculty" value="fsu"  class="form-control">
     <label for="fsu">FSU</label></td>
</tr>
<tr>
     <td>MATRIC.NO: <input type="text" name="matricno" class="form-control"></td>
</tr>
<tr>
     <td>ADDRESS: <input type="text" name="address" class="form-control"></td>
</tr>
<tr>
     <td>DRIVING LICENSE CLASS:<input type="text" name="licenseclass" class="form-control"></td>
</tr>
<tr>
     <td>ROAD TAX END DATE:<input type="text" name="roadtax" class="form-control"></td>
</tr>
<tr>
     <td>MOTOR BRAND: <input type="text" name="motorbrand" class="form-control"></td>
</tr>
<tr>
     <td>COLOR: <input type="text" name="color" class="form-control"></td>
</tr>
<tr>
     <td>CYLINDER POWER: <input type="text" name="cylinderpower" class="form-control"></td>
</tr>
<tr>
     <td>VEHICLE REGISTRATION NO.: <input type="text" name="registration" class="form-control"></td>
</tr>
<tr>
     <td>DRIVER'S LICENSE EXPIRATION DATE: <input type="text" name="expirationdate" class="form-control"></td>
</tr>
</table>
<td><td>
     <td><button name="save" type="submit">Save Record</button></td>
      <td><a href="homestudent.php" type="submit">Cancel</a></td>    
</td>
</td>
</form><br><br><br>
<footer>
  <p>Footer</p>
</footer>
</body>
</html>

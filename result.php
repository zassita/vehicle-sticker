 <?php
//insertactivity.php
 session_start();
include('checksessionstudent.php');

?>
<!DOCTYPE HTML>
<html>
<head><title>VEHICLE STICKER APPLICATION</title>
<img src="logo_kuis.png" alt="logokuis" width="1000" height="110" >
</head>

<style>

	body {
  margin: 0;
  text-align: center;
}

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
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

     .btn-group .button:not(:last-child)
    {
    	border-right: : none;
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

</style>
<body>
	<div class="header">
  <h1>VEHICLE STICKER APPLICATION FOR KUIS STUDENT</h1>
</div>

<div class="topnav">
  <a href="studentlogout.php" class="button4">LOGOUT<link href="studentlogout.php" rel="stylesheet" type="text/css"></a>
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

<h2>YOUR RESULT</h2>
<form name="insert" action="listingcar.php" method="get">
<table border="1">
</table>
</form>
</body>
</html>
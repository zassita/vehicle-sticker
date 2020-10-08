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
    text-align: left;
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
<a href="studenthome.php" class="button1">HOME<link href="adminhome.php" rel="stylesheet" type="text/css"></a> 
</div>

<h2>PERATURAN-PERATURAN MENGGUNAKAN KENDERAAN DI DALAM KOLEJ UNIVERSITI ISLAM ANTARABANGSA SELANGOR (KUIS)</h2><br>

<form>

1. Pengguna-pengguna jalanraya di dalam kampus adalah tertakluk kepada peraturan KUIS dan Akta Pengangkutan Jalan (1987).<br><br>

2. Setiap pemandu kenderaan yang masuk ke kampus hendaklah mempunyai pelekat kenderaan yang sah.<br><br>

3. Kebenaran memasuki kampus hanya diberi kepada Ahli Lembaga Pengarah, pegawai, pelajar, agensi luar dan pelawat yang sah sahaja.<br><br>

4. Pelekat kenderaan ini hendaklah digunakan sepanjang masa untuk tujuan masuk ke KUIS.<br><br>

5. Pelekat kereta hendaklah dipamerkan di penjuru (kanan) atas cermin hadapan kenderaan dan bagi motosikal pula hendaklah dipamerkan di bahagian hadapan bagi memudahkan pelekat tersebut dapat dilihat.<br><br>

6. Pelekat-pelekat kenderaan ini tidak boleh dipindah milik atau dipalsukan, jika didapati bersalah stiker yang dirampas tidak akan dikembalikan.<br><br>

7. Had laju di dalam kampus tidak melebihi 35 km/j. Sila perlahankan kenderaan semasa melalui pintu utama ke KUIS.<br><br>

8. Pengguna-pengguna jalanraya diminta memberi kerjasama ketika pemeriksaan keselamatan dijalankan.<br><br>

9. Kenderaan yang tidak mempunyai pelekat adalah dilarang masuk.<br><br>

10. Sekiranya berlaku sesuatu kemalangan di dalam kawasan kampus hendaklah dilaporkan ke Bahagian Keselamatan dan pihak berkuasa Kolej Universiti secepat mungkin.<br><br>

11. Kenderaan-kenderaan hendaklah diparkir di tempat yang dikhaskan sahaja atau di tempat yang diarahkan oleh pihak keselamatan.<br><br>

12. Kebenaran boleh ditarik balik oleh pihak keselamatan pada bila-bila masa jika arahan-arahan lalulintas di dalam kampus tidak dipatuhi.<br><br>

</form>
</body>
</html>
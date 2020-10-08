<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="stickers";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    If(!$conn){//cannot established
         die("DB Connection failed<br>");
     }
     else{//connected to DB
         echo "DB Connection established<br>";
     }
?>
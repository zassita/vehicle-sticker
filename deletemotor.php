<html>
<head>
	<title>Delete Record</title>
</head>
<body>
<?php
     include "dbconnection.php";
     $matricno=$_GET['matricno'];

     $sql="delete from listingmotor
           where matricno='$matricno'";
     $qr=mysqli_query($conn, $sql);
     
     if ($qr==true) {
     	echo "The record for $matricno has been deleted";
	 }
     else {
     	echo "Fail to delete record for $matricno";
     	echo mysqli_error($conn);
     }     
    ?>
    <br>
    <a href="listmotor.php">Listing</a>
    <br>
</body>
</html>
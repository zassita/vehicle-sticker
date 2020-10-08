<?php
include "listing.php";

    $name=$_GET['name'];
	$phoneno=$_GET['phoneno'];
	$gender=$_GET['gender'];
	$programme=$_GET['programme'];
	$faculty=$_GET['faculty'];
	$matricno=$_GET['matricno'];
	$address=$_GET['address'];
	$licenseclass=$_GET['licenseclass'];
	$roadtax=$_GET['roadtax'];
	$carbrand=$_GET['carbrand'];
	$color=$_GET['color'];
	$cylinderpower=$_GET['cylinderpower'];
	$registration=$_GET['registration'];
	$expirationdate=$_GET['expirationdate'];
	$status=$_REQUEST['status'];

	$sql="UPDATE listingcar SET
	name='$name', phoneno='$phoneno',gender='$gender', programme='$programme', faculty='$faculty', matricno='$matricno', address='$address', licenseclass='$licenseclass', roadtax='$roadtax',
	 carbrand='$carbrand', color='$color', cylinderpower='$cylinderpower', registration='$registration', expirationdate='$expirationdate'";

	 $rs=mysqli_query($db, $sql);

	 if ($rs==true) {
	 	echo "Update Car Registration $matricno SUCCESSFUL";
	 }
	 else {
	 	echo "Update Car Registration Information NOT SUCCESSFULL";
	 	echo mysqli_error($db);
	 }
	 ?>
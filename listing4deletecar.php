<?php

$db=mysqli_connect("localhost","root","","stickers");

$query="select name, phoneno, gender, programme, faculty, matricno, address, licenseclass, roadtax, carbrand, color, cylinderpower,registration, expirationdate
from listingcar 
order by name asc";

$qr=mysqli_query($db,$query);
if($qr==false){
echo ("Query cannot be executed!<br>");
echo ("SQL Error : ".mysqli_error($db));
}

?>
<html>
<head>
	<title>Listing to delete</title>
</head>

<body>
Listing a table for deleting<br>
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
 <td>CAR BRAND</td>
 <td>COLOR</td>
 <td>CYLINDER POWER</td>
 <td>VEHICLE REGISTRATION NO.</td>
 <td>DRIVER'S LICENSE EXPIRATION DATE</td>
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
 <td><?=$rekod['carbrand']?></td>
 <td><?=$rekod['color']?></td>
 <td><?=$rekod['cylinderpower']?></td>
 <td><?=$rekod['registration']?></td>
 <td><?=$rekod['expirationdate']?></td>
 <td>
 <a href="confirmdelete.php?matricno=<?=$rekod['matricno']?>">DELETE></a>
</td>
 </tr>
<?php
}
?>
</table>
<?php
}
?>
</body>
</html>
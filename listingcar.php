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
     $carbrand=$_POST['carbrand'];
     $color=$_POST['color'];
     $cylinderpower=$_POST['cylinderpower'];
     $registration=$_POST['registration'];
     $expirationdate=$_POST['expirationdate'];
     // get files
      $target_dir = "files/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }


      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
//sql insert
          $sql="INSERT INTO listingcar
          (name, phoneno, gender, programme, faculty, matricno, address, licenseclass, roadtax, carbrand, color, cylinderpower, registration, expirationdate)
          VALUES('$name', '$phoneno', '$gender','$programme','$faculty', '$matricno', '$address', '$licenseclass', '$roadtax', '$carbrand','$color', '$cylinderpower', '$registration', '$expirationdate')";

$rs=mysqli_query($conn, $sql);
?>
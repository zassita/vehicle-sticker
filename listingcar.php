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
     // upload image
    $target_dir = "files/";
    $newfilename = "image-". basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir .$newfilename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Allow certain file formats
    if($_FILES['fileToUpload']['type'] != "application/pdf" ) {
      echo "Sorry, only PDF files are allowed.";
      $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    $rs=mysqli_query($conn, $sql);
?>
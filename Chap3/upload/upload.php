<?php
  $inputFiledName = "fileUpload";
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES[$inputFiledName]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if file is an image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES[$inputFiledName]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists.
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES[$inputFiledName]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
  }

  //Allow certain file formats
  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, PNG, JPEG, GIF file are allowed";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not upload";
  } else {
    if (move_uploaded_file($_FILES[$inputFiledName]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars(basename($_FILES[$inputFiledName]["name"])). " has been upload.";
    } else {
      echo "Sorry, there was an error when uploading your file.";
    }
  }

 ?>

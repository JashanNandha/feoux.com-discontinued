<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}

?>
<?php

if (isset($_POST['submit'])) {
  require('../../dbcon.php');
  $username = $_SESSION["username"];
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.jpg', '.jpeg', '.png', '.svg', '.ico', '.JPG', '.gif');

	if (in_array($file_ext, $allowed_file_types) && ($filesize < 200000)) {
		// Rename file
		$newfilename = random_int(0, 99999999) . $file_ext;
		if (file_exists("../avatar/" . $newfilename)) {
			// file already exists error
			echo "You have already uploaded this file.";
		} else {
			move_uploaded_file($_FILES["file"]["tmp_name"], "../avatar/" . $newfilename);
			echo "File uploaded successfully.Reload to see it.";
      $sql = "UPDATE `user` SET `avatar`='avatar/$newfilename' WHERE `username`='$username' or email='$username'";
		if (mysqli_query($conn, $sql)) {
			echo "<p>Image Updated Sucessfully.</p><p><img src='../avatar/$newfilename' style='
      border-radius: 100%;
      width: 200px;
      object-fit:cover;
      height: 200px;
  '></p>";
			echo "<script>
		setTimeout(function(){
			window.location.href = '../';
		}, 2000);
		</script>";
		} else {
			echo "Error updating record";
		}
		}
	} elseif (empty($file_basename)) {
		// file selection error
		echo "Please select a file to upload.";
	} elseif ($filesize > 1000000) {
		// file size error
		echo "The file you are trying to upload is too large.";
	} else {
		// file type error
		echo "Only these file types are allowed for upload: " . implode(', ', $allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
}
?>
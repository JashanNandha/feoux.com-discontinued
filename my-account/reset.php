<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

?>
<?php

if (isset($_POST['submit'])) {
  require('../dbcon.php');
  $username = $_SESSION["username"];
  $fullname = $_POST['fullname'];
  $dob = $_POST['dob'];  $adress = $_POST['adress'];
  

      $sql = "UPDATE `user` SET `name`='$fullname',`dob`='$dob',`adress`='$adress' WHERE `username`='$username' or email='$username'";
		if (mysqli_query($conn, $sql)) {
			echo "<p style='font-family:sans-serif'>User data of <u style='color:blue'>$username</u> Updated Sucessfully.</p>";
			echo "<script>
		setTimeout(function(){
			window.location.href = '../my-account/';
		}, 2000);
		</script>";
		} else {
			echo "Error updating record";
		}
}
?>
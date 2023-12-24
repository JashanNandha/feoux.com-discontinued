<?php
session_start();
if (!isset($_SESSION['id_r'])) {
    header('Location: ../../register.php');
    exit();
}

?><!doctype html>
<html lang="en-US">
<?php $today = date("Y-m-d"); ?>

<head>
<style>
		#message p {
			padding: 15px 40px;
			font-size: 18px;

		}

		.h3 {
			color: black;
		}

		.form-control {
			width: 40%;
			outline: none;
			border: none;
			display: inline;
		}

		/* Add a green text color and a checkmark when the requirements are right */
		.valid {
			color: green;
		}

		.valid:before {
			position: relative;
			left: -35px;
			content: "✔";
			border: green;
		}

		/* Add a red text color and an "x" when the requirements are wrong */
		.invalid {
			color: red;
		}

		.invalid:before {
			position: relative;
			left: -35px;
			content: "✖";
		}
	</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11"><link href='https://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet'>
    <title>Truely</title>   <link rel="icon" href="https://www.feoux.com/favicon.ico" type="image/x-icon"><link rel="icon" href="https://www.feoux.com/favicon.png" type="image/x-icon">
<meta name="description" content="Feoux is article sharing platform where anyone can read and publish articles all around globe.">
<meta name="keywords" content="article, articles, sharing, article sharing, knowledge, ideas, thinking, music, earn, earning, money">
<meta name="author" content="Feoux">
<link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    
    <link rel="stylesheet" href="font-awesome/css/all.css">
<link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">

    <link rel='stylesheet' id='axil-fonts-css'
        href='https://fonts.googleapis.com/css?family=Red+Hat+Display%3A0%2C400%3B0%2C500%3B0%2C700%3B0%2C900%3B1%2C400%3B1%2C500%3B1%2C700%3B1%2C900&#038;subset=latin%2Clatin-ext&#038;ver=5.7.2'
        type='text/css' media='all' />

    <link rel="stylesheet" type="text/css" href="assets/content/cache/wpfc-minified/ll1wrm5m/dq6n.css" media="all" />
    <style id='elementor-frontend-inline-css' type='text/css'>
    @font-face {
        font-family: eicons;
        src: url(assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);
        src: url(assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
        font-weight: 400;
        font-style: normal
    }
    </style>
    <link rel="https://api.w.org/" href="wp-json/" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/247" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="assets/includes/wlwmanifest.xml" />
    
    <link rel="canonical" href="ask-now/" />
    <link rel='shortlink' href='?p=247' />
    <link rel="alternate" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed?url=http%3A%2F%2Faxilthemes.com%2Fthemes%2Fblogar%2Fhome-tech-blog%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed?url=http%3A%2F%2Faxilthemes.com%2Fthemes%2Fblogar%2Fhome-tech-blog%2F&#038;format=xml" />

    <link rel="icon" href="assets/content/uploads/2021/01/favicon.png" sizes="32x32" />
    <link rel="icon" href="assets/content/uploads/2021/01/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/content/uploads/2021/01/favicon.png" />
    <meta name="msapplication-TileImage" content="assets/content/uploads/2021/01/favicon.png" />
    <link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
   

</head>
<style>@media (min-width: 2500px) {

.wishes {
    width:60%;
}

}

@media (min-width: 1400px) and (max-width:2499px) {

.wishes {
  width:60%;
}

}

@media (min-width: 1000px) and (max-width:1399px) {

.wishes {
  width:60%;
}

}

@media (min-width: 700px) and (max-width:999px) {

.wishes {
  width:80%;
}

}

@media (min-width: 100px) and (max-width:699px) {

.wishes {
  width:90%;
}
}</style>
<body>
    <?php
  require("../../../dbcon.php");
  $sql = "SELECT `id`, `link`, `desc`, `date` FROM `wallpaper` ORDER BY RAND() LIMIT 1;";
  $res = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($res);
  if ($count > 0) {
      // Output the details within a table with Bootstrap styes
      while ($data = mysqli_fetch_assoc($res)) {
          $link = $data['link'];
          $desc = $data['desc'];
          echo "<img src='../../../wallpaper/$link' alt='$desc' style='width:100%;height: 100%;position: absolute;object-fit:cover;margin:-8px;opacity:0.9'>";
      }
  }
  ?>
    <div
        style='top:0px;background:transparent;width:100%;z-index:100;vertical-align: middle;position:absolute;height: 100%;left:0px;'>
        <center>
            <div class='wishes'
                style='border-radius:10px;background: #fefefe;margin-top: 7%;font-size:140%;font-family:sans-serif'>
                <div style='padding:20px;'>
                    <h1 style="font-size:24px;font-family: 'Rubik';color:#3f51b5">Welcome to <span style='color:#03a9f4'>Feoux</span></h1>
                    <br><form method="post" action="" style='text-align:center;'>
<style>label{
    font-family:sans-serif;
    font-size:18px;
}
input{
    padding:10px;
    border-radius:10px;
    border:solid 1.5px black;
    background:#eceff1;
}
p {
    position: relative;
}
</style>

                                            <p>
                                                <label for="name">Password&nbsp;<span class="required">*</span></label>
                                                <input type="password" name="pwd" autocomplete="password" value="" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  placeholder='Enter Passowrd' required />
                                            </p>
                                            <p>
                                                <label for="name">Confirm Password&nbsp;<span class="required">*</span></label>
                                                <input type="password" name="c-pwd" id="pwd" autocomplete="password" value=""  placeholder='Confirm Password' required />
                                            </p>
                                            <div id="message" style="display: none;background:white;border-radius:10px;">
						<h6 class="h3">Password must contain the following:</h6>
						<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
						<p id="capital" class="invalid">A <b>capital</b> letter</p>
						<p id="number" class="invalid">A <b>number</b></p>
						<p id="length" class="invalid">Minimum <b>8 characters</b></p>
					</div>
                                            <center>

                                                <p class="form-row">
                                                    <button type="submit" style='padding: 12px 19px;border-radius: 7px;background: #3f51b5;color:white;text-decoration:none;border:none;font-family:sans-serif' name="submit" value="Register">Next</button>
                                                </p>
                                               
                                            </center>
                                           
                                        </form>
               </div>
            </div>
        </center>
    </div>
    <script>
		function myFunction() {
			var x = document.getElementById("password");

			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}

		}

		var password = document.getElementById("password"),
			confirm_password = document.getElementById("confirm_password");

		function validatePassword() {
			if (password.value != confirm_password.value) {
				confirm_password.setCustomValidity("Passwords Don't Match");
			} else {
				confirm_password.setCustomValidity('');
			}
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
	</script>
	<script>
		var myInput = document.getElementById("password");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");

		// When the user clicks on the password field, show the message box
		myInput.onfocus = function() {
			document.getElementById("message").style.display = "block";
		}

		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function() {
			document.getElementById("message").style.display = "none";
		}

		// When the user starts to type something inside the password field
		myInput.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if (myInput.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}

			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if (myInput.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if (myInput.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}

			// Validate length
			if (myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}
		}
	</script>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write('<script type="text/javascript" src="js/jquery-3.2.1.min.js"><\/script>')
	</script>
</body>

</html>
<?php
          // Build up DB connection including cofiguration file
          require("../../../dbcon.php");
          $pwd =  $_REQUEST['pwd'];
          $id = $_SESSION["id_r"];
          if (isset($_POST)) {
              if ($pwd== '') {
                  echo "";
              } else {
                $pwd=md5($pwd);
                  $sql = "UPDATE `user` SET `password`='$pwd' WHERE id='$id'";
                  if (mysqli_query($conn, $sql)) {
                      $output_dir="../../../cache/log/";
                      $dir="$id";
                      if (!file_exists($output_dir . $dir)) /* Check folder exists or not */
                            {
                                @mkdir($output_dir . $dir, 0777);/* Create folder by using mkdir function */
                                $file_name = "index";
                                $content='$id="'.$id.'";'.'$like="";$view="";'.'$follow="";';
$folder = "../../../cache/log/$id/";
$ext = ".php";
$file_name = $folder . "" . $file_name . "" . $ext;
$create_file = fopen($file_name, 'w');
fwrite($create_file, $content);
fclose($create_file);
                                echo "<div style='z-index:100;position:absolute;width:100%;left: 0px;top:5%;'>
                  <center>
                      <div id='caption' style='background: #28a745;color: white;text-align: center;width: 50%;font-family: sans-serif;padding: 10px;border-radius: 10px;'>Record updated<span style='left: 15%;position: relative;' class='fas fa-times' onclick='document.getElementById(`caption`).style.display=`none`;'></span></div>
              </center>
              </div><script>
              setTimeout(function(){
              window.location.href = '../../../my-account/';
              }, 2000);
              </script>";
                            }
                  } else {
                      echo "<div style='z-index:100;position:absolute;width:100%;left: 0px;top:5%;'>
                  <center>
                      <div id='caption' style='background: #ef2d2d;color: white;text-align: center;width: 50%;font-family: sans-serif;padding: 10px;border-radius: 10px;'>Error!Record can't made<span style='left: 15%;position: relative;' class='fas fa-times' onclick='document.getElementById(`caption`).style.display=`none`;'></span></div>
              </center>
              </div>";
                  }
              };
          }

          ?>
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
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */

.slideshow-container {
  max-width: 60%;
  position: relative;
  margin: auto;
}
  .text {
    color: #3f51b5;
    font-size: 20px;
    padding: 15px 12px;
    position: absolute;
    bottom: -50px;
    width: 100%;
    text-align: center;

}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 5px;
  width: 5px;
  margin: 0 2px;
  background-color: #bbdefb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #ff5722;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>
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
}.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
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
                <div style='padding:20px'>
                    <h1 style="font-size:24px;font-family: 'Rubik';color:#3f51b5">Welcome to <span style='color:#03a9f4'>Feoux</span></h1>
                    <div style="width: 50%;border-radius: 10px;">
              
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/Brainstorm+.gif" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/g.webp" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/pablita_downloading.webp" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="img/pablita_internet_news.webp" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="img/science.webp" style="width:100%">
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

                </div>
                    <br><quote style="font-family: sans-serif;color:#607d8b;font-size:18px"><i class="fa fa-quote-left" style='color:#3f51b5'></i>&nbsp;Gaining knowledge, is the first step to<strong style='color:#ff5722'> wisdom</strong>. Sharing it, is the first step to humanity.&nbsp;<i  style='color:#3f51b5' class="fa fa-quote-right"></i></div>
                    </quote>
                    <a href='next.php' style='padding: 5px 10px;border-radius:10px;background: #3f51b5;color:white;text-decoration:none'>Next</a>
                <br><br></div>
            </div>
        </center>
    </div>
</body>

</html>
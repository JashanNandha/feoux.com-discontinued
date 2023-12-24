<?php
session_start();
if (!isset($_SESSION['cid'])) {
    header('Location: ../pass-channel/');
    exit();
}

?>
<?php
require("../dbcon.php");
$cid = $_SESSION["cid"];
$sql = "SELECT * FROM `channel` WHERE `id`='$cid'";
$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
    // Output the details within a table with Bootstrap styes
    while ($data = mysqli_fetch_assoc($res)) {
        $channel = $data['channel'];
        $desc = $data['desc'];
    }
}

?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editor</title>
    <link rel="apple-touch-icon" sizes="57x57" href="https://www.feoux.com/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://www.feoux.com/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.feoux.com/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.feoux.com/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.feoux.com/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.feoux.com/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.feoux.com/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.feoux.com/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.feoux.com/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://www.feoux.com/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.feoux.com/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://www.feoux.com/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.feoux.com/images/favicon-16x16.png">
    <link rel="manifest" href="https://www.feoux.com/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://www.feoux.com/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="description"
        content="Feoux is article sharing platform where anyone can read and publish articles all around globe.">
    <meta name="keywords"
        content="article, articles, sharing, article sharing, knowledge, ideas, thinking, music, earn, earning, money">
    <meta name="author" content="Feoux">
    <link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css">
    <link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css">
    <link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
</head>
<style>
@font-face {
    font-family: 'Pacifico';
    font-style: normal;
    font-weight: 700;
    src: local('Pacifico Bold'), local('Pacifico-Bold'), url(../fonts/Pacifico.ttf) format('ttf');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
</style>

<body>
    <?php
// If upload button is clicked ...
if (isset($_POST['submit'])) {
    require('../../dbcon.php');
    $username = $_SESSION["username"];
    $desc=$_REQUEST['desc'];
    $channell= str_ireplace(' ', '-', $channel);
    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
      $file_ext = substr($filename, strripos($filename, '.')); // get file name
      $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.jpg', '.jpeg', '.png', '.svg', '.ico', '.JPG', '.gif');
  
    if (in_array($file_ext, $allowed_file_types) && ($filesize < 900000000)) {
        // Rename file
        $newfilename = "avatar.jpg";
        if (file_exists("../../channel/$channell/" . $newfilename)) unlink("../../channel/$channell/" . $newfilename);
            move_uploaded_file($_FILES["file"]["tmp_name"], "../../channel/$channell/" . $newfilename);
            
            $sql = "UPDATE `channel` SET `image`='$channell/$newfilename',`desc`='$desc' WHERE `channel`='$channel'";
            if (mysqli_query($conn, $sql)) {
                echo "<p style='font-family:sans-serif'>Image Updated Sucessfully.</p><p><img src='../../channel/$channell/$newfilename' style='
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
    <p><h1>Your Channel &nbsp;<a href="../" style="
    text-decoration: none;
    background: #1976d2;
    color: #eceff1;
    border-radius: 10px;
    padding: 10px;
    font-size: 18px;
    vertical-align: middle;
    top: -6px;
    position: relative;
    font-family: sans-serif;
">Home</a></h1></p><br><Br>
    <h4>Channel Name</h4>
   
        <input class="input" type="text" readonly value="<?php echo"$channel" ?>" aria-required="true"
            aria-placeholder="Type Heading for new post" autocomplete="off" aria-autocomplete="none" autofocus
            maxlength="70" required aria-required="true"><br><br>
         <form method="POST" action="" enctype="multipart/form-data">
            <h4>Channel Description&nbsp;<i class="fas fa-pen"></i></h4><textarea class="textarea" type="text" name="desc"
            placeholder="Description of your post" aria-required="true" aria-placeholder="Type Description for channel"
            required aria-required="true" autocomplete="off" aria-autocomplete="none"
            maxlength="300"><?php echo"$desc" ?></textarea><br><br>

        <h4>Channel Logo&nbsp;<i class="fas fa-pen"></i></h4><input type="file" onchange="loadfile(event)"
        name="file" value="" placeholder="Channel Icon" required aria-required="true" />
        <br><br>
        <div class="m"><img id="output"></div><br>
        <div>
            <button type="submit" name="submit" >Edit</button>
        </div>
    </form>

    <style>
    body {
        padding: 20px
    }

    h4 {
        font-family: sans-serif;
        color: #37474f;
        margin: 10px 0px;
    }

    input {
        padding: 10px;
        border-radius: 7px;
        border: none;
        background: #eceff1;
        outline: none;
        color: #37474f;
        text-transform: capitalize;
    }

    select {
        padding: 10px;
        border-radius: 7px;
        border: none;
        background: #eceff1;
        outline: none;
        color: #37474f;
        width: 189px;
    }

    textarea {
        padding: 10px;
        border-radius: 7px;
        border: none;
        background: #eceff1;
        outline: none;
        color: #37474f;
        max-width: 30%;
        width: 271px;
        height: 89px;
        min-width: 271px;
        min-height: 89px;
        font-family: sans-serif;
    }

    button {
        background: #37474f;
        outline: none;
        border: none;
        padding: 10px;
        width: 90px;
        border-radius: 7px;
        color: white;
    }

    h1 {
        text-transform: capitalize;
        color: #37474f;
        font-family: pacifico;
    }

    .m {
        border-radius: 7px;
        border: none;
        outline: none;
        color: #37474f;
    }

    img {
        width: 273px;
        border-radius: 10px
    }
    </style>
    <script>
    var loadfile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    }
    </script>
    </div>
</body>

</html>
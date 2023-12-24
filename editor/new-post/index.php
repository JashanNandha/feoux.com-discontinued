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
$sql = "SELECT `id`, `channel` FROM `channel` WHERE `id`='$cid'";
$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
    // Output the details within a table with Bootstrap styes
    while ($data = mysqli_fetch_assoc($res)) {
        $channel = $data['channel'];
    }
}

?>

<?php
// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $title= strtolower($_REQUEST['title']);
    $linkt = str_ireplace(' ', '-', $title);
    $desc=$_REQUEST['desc'];
    $cat=$_REQUEST['cat'];
    $sql = "SELECT * FROM `post` WHERE `title` like '$title'";
                                                            $results = mysqli_query($conn, $sql);
                                                            if (mysqli_num_rows($results) > 0) {
                                                                echo "<span id='login' style='display:none;'><div style='z-index:100;position:absolute;width:100%;left: 0px;top:5%;'>
                                                                <center>
                                                                    <div id='caption' style='background: #28a745;color: white;text-align: center;width: 50%;font-family: sans-serif;padding: 10px;border-radius: 10px;'>Channel already exist<span style='left: 15%;position: relative;' class='fas fa-times' onclick='document.getElementById(`login`).style.display=`none`;'></span></div>
                                                              </center>
                                                              </div></span>";
                                                            } else {
    $output_dir="../../channel/";
    $channell = str_ireplace(' ', '-', $channel);
    $dir="$channell/$linkt";
    if (!file_exists($output_dir . $dir))/* Check folder exists or not */
			{
				@mkdir($output_dir . $dir, 0777);/* Create folder by using mkdir function */
	            echo "";/* Success Message */
                $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../channel/$channell/$linkt/".$filename;
        
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
                                                            
                                                                if (empty($title)) {
                                                                    echo "";
                                                                } else {
                                                                    $_SESSION['title'] = $title;
                                                                    $today = date("Y/m/d");
                                                                    $timet= date("H:i:s");
                                                                    $sql = "INSERT INTO `post`(`code`,`title`, `desc`, `image`, `category`, `channel`, `editable`, `views`, `like`, `date`, `time`) VALUES (NULL,'$title','$desc','$channell/$linkt/$filename','$cat','$channel','private','0','0','$today','$timet')";
                                                                    if (mysqli_query($conn, $sql)) {
                                                                        echo "Thanks for creating post.You will redirected to next page";
                                                                        echo "<script>setTimeout(function(){window.location.href = 'store/';}, 2000);</script>";

                                                                    } else {
                                                                        echo "Error updating record". mysqli_error($conn);
                                                                    }
                                                                }
                                                            }
        
    } else {
        $msg = "Failed to upload image";
        echo"$msg";
    }
			}
    
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Editor</title>   <link rel="icon" href="https://www.feoux.com/favicon.ico" type="image/x-icon"><link rel="icon" href="https://www.feoux.com/favicon.png" type="image/x-icon">
<meta name="description" content="Feoux is article sharing platform where anyone can read and publish articles all around globe.">
<meta name="keywords" content="article, articles, sharing, article sharing, knowledge, ideas, thinking, music, earn, earning, money">
<meta name="author" content="Feoux">
<link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
</head>
<style>@font-face {
    font-family: 'Pacifico';
    font-style: normal;
    font-weight: 700;
    src: local('Pacifico Bold'), local('Pacifico-Bold'), url(../fonts/Pacifico.ttf) format('ttf');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}</style>
<body>
<h1>Create new post &nbsp;<a href="../" style="
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
">Home</a></h1>
<form method="POST" action="" enctype="multipart/form-data">
<input class="input" type="text" name="title" placeholder="Type Heading for new post" aria-required="true"
            aria-placeholder="Type Heading for new post" autocomplete="off" id="ItemName" aria-autocomplete="none" autofocus
            maxlength="70" required aria-required="true"><br><br>
        <textarea class="textarea" type="text" name="desc" placeholder="Description of your post" aria-required="true"
            aria-placeholder="Type Description for new post" required aria-required="true" autocomplete="off" aria-autocomplete="none"
            maxlength="300"></textarea><br><br><script>$('#ItemName').keypress(function (e) {
    var txt = String.fromCharCode(e.which);
    if (!txt.match(/[A-Za-z0-9-!_&. ]/)) {
        return false;
    }
});</script>
        <select class='select' name="cat" required aria-required="true" autocomplete="off">
            <option value="Film & Animation">Film & Animation</option>
            <option value="Autos & Vehicles">Autos & Vehicles</option>
            <option value="Music">Music</option>
            <option value="Pets & Animals">Pets & Animals</option>
            <option value="Sports">Sports</option>
            <option value="Travel & Events">Travel & Events</option>
            <option value="Gaming">Gaming</option>
            <option value="People & Blogs">People & Blogs</option>
            <option value="Comedy">Comedy</option>
            <option value="Entertainment">Entertainment</option>
            <option value="News & Politics">News & Politics</option>
            <option value="Howto & Style">Howto & Style</option>
            <option value="Education">Education</option>
            <option value="Science & Technology">Science & Technology</option>
            <option value="Nonprofits & Activism">Nonprofits & Activism</option>
        </select><br><br>
        <input type="file" onchange="loadfile(event)" name="uploadfile" value="" required aria-required="true" />
        <br><br><div class="m"><img id="output"></div><br>
        <div>
            <button type="submit" name="upload">Next</button>
        </div>
    </form>
    <style>body{padding:20px}
    input {
    padding: 10px;
    border-radius: 7px;
    border: none;
    background: #eceff1;
    outline: none;
    color: #37474f;
}select {
    padding: 10px;
    border-radius: 7px;
    border: none;
    background: #eceff1;
    outline: none;
    color: #37474f;
    width:189px;
}textarea {
    padding: 10px;
    border-radius: 7px;
    border: none;
    background: #eceff1;
    outline: none;
    color: #37474f;
    max-width:30%;
    width:271px;
    height:89px;min-width:271px;
    min-height:89px;
}button{
    background: #37474f;
    outline: none;
    border: none;
    padding: 10px;
    width: 90px;
    border-radius: 7px;
    color: white;
}h1 {
    text-transform: capitalize;
    color: #37474f;
    font-family: pacifico;
}
.m{
    border-radius: 7px;
    border: none;
    outline: none;
    color: #37474f;
}img{width:273px;border-radius:10px}</style><script> var loadfile= function(event){
            var image=document.getElementById('output');
        image.src=URL.createObjectURL(event.target.files[0]);
    }  </script>
    </div>
</body>

</html>
        

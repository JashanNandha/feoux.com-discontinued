<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../../my-account/login.php');
    exit();
}

?>
<?php
require("../dbcon.php");
$username = $_SESSION["username"];

?>

<?php
// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $channel=$_REQUEST['name'];
    $channel=strtolower($channel);
    $sql = "SELECT * FROM `channel` WHERE `channel` like '$channel'";
    $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results) > 0) {
        echo"<span id='login' style='display:none;'><div style='z-index:100;position:absolute;width:100%;left: 0px;top:5%;'>
        <center>
            <div id='caption' style='background: #28a745;color: white;text-align: center;width: 50%;font-family: sans-serif;padding: 10px;border-radius: 10px;'>Channel already exist<span style='left: 15%;position: relative;' class='fas fa-times' onclick='document.getElementById(`login`).style.display=`none`;'></span></div>
      </center>
      </div></span>";
    } else {
        $channell= str_ireplace(' ', '-', $channel);
        $desc=$_REQUEST['desc'];
        $output_dir="../../channel/";
        $dir="$channell/";
        if (!file_exists($output_dir . $dir)) /* Check folder exists or not */
            {
                @mkdir($output_dir . $dir, 0777);/* Create folder by using mkdir function */
                echo "";/* Success Message */
                $filename = "avatar.jpg";
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../channel/$channell/".$filename;
        
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
        
        require("../dbcon.php");
        $sql = "SELECT * FROM `user` WHERE `username`='$username'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // Output the details within a table with Bootstrap styes
            while ($data = mysqli_fetch_assoc($res)) {
                $uid = $data['id'];
            }
        }
        $sql = "INSERT INTO `channel`(`channel`, `image`, `owner_name`, `owner_id`, `desc`, `follower`) VALUES 
                ('$channel','$channell/avatar.jpg','$username','$uid','$desc','0')";
        if (mysqli_query($conn, $sql)) {
            echo "Thanks for creating new post.You will redirected to next page";
        } else {
            echo "            <div id='caption' style='backgrond: #28a745;color: white;text-align: center;width: 50%;font-family: sans-serif;padding: 10px;border-radius: 10px;'>". mysqli_error($conn)."<span style='left: 15%;position: relative;' class='fas fa-times' onclick='document.getElementById(`login`).style.display=`none`;'></span></div>";
        }
        echo "<script>setTimeout(function(){window.location.href = '../';}, 2000);</script>";
    }
    } else {
        $msg = "Failed to upload image";
        echo"            <div id='caption' style='background: #28a745;color: white;text-align: center;width: 50%;font-family: sans-serif;padding: 10px;border-radius: 10px;'>$msg<span style='left: 15%;position: relative;' class='fas fa-times' onclick='document.getElementById(`login`).style.display=`none`;'></span></div>
        ";
    }
    }
}
?>
<h1>Create new channel</h1>
<form method="POST" action="" enctype="multipart/form-data">
        <input class="input" type="text" name="name" placeholder="Type Name of new channel" aria-required="true"
            aria-placeholder="Type Name of new channel" autocomplete="off" aria-autocomplete="none" autofocus
            maxlength="70" id="ItemName" required aria-required="true"><br><br>
            <script>$('#ItemName').keypress(function (e) {
    var txt = String.fromCharCode(e.which);
    if (!txt.match(/[A-Za-z0-9]/)) {
        return false;
    }
});</script>
        <textarea class="textarea" type="text" name="desc" placeholder="Description of your channel" aria-required="true"
            aria-placeholder="Type Description for channel" required aria-required="true" autocomplete="off" aria-autocomplete="none"
            maxlength="300"></textarea><br><br>
       
        <input type="file" onchange="loadfile(event)" name="uploadfile" value="" required aria-required="true" />
        <br><br><div class="m"><img id="output"></div><br>
        <div>
            <button type="submit" name="upload">Create Channel</button>
        </div>
    </form>
    <style>body{padding:20px}input {
    padding: 10px;
    border-radius: 7px;
    border: none;
    background: #eceff1;
    outline: none;
    color: #37474f;
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
    width: 14%;
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
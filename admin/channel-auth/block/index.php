<?php
if (isset($_POST['test1'])) {
    require('../../dbcon.php');
    $code =  $_REQUEST['code'];
    $result_query = "SELECT * FROM `channel` WHERE `id`='$code'";

    $run_result = mysqli_query($conn, $result_query);

    if (mysqli_num_rows($run_result) < 1) {
        echo "Error!";
        echo"<script>
            setTimeout(function(){
            window.location.href = '../';
            }, 2000);
            </script>";
        exit();
    }

    while ($row_result = mysqli_fetch_array($run_result)) {
        $code = $row_result['id'];$channel = $row_result['channel'];
        
                                    $sql = "SELECT * FROM `channel` WHERE `id`='$code'";
                                    $res = mysqli_query($conn, $sql);
                                     $count = mysqli_num_rows($res);
                                    if ($count > 0) {
                                        // Output the details within a table with Bootstrap styes
                                        while ($data = mysqli_fetch_assoc($res)) {
                                            
                                            $id = $data['id'];
                                            $channel = $data['channel'];
                                            $image = $data['image'];
                                            $ow = $data['owner_name'];
                                            $oi = $data['owner_id'];
                                            $desc = $data['desc'];
                                            $date = $data['date'];$follow = $data['follower'];
                                            $n= 'insert into `channel`(`id`, `channel`, `image`, `owner_name`, `owner_id`, `desc`, `date`, `follower`) VALUES ("'."$id".'","'."$channel".'","'."$image".'","'."$ow".'","'."$oi".'","'."$desc".'","'."$date".'","'."$follow".'")';
                                            $output_dir="../block/";
                                            $dir="$id/";
                                            if (!file_exists($output_dir . $dir))/* Check folder exists or not */
                                                    {
                                                        @mkdir($output_dir . $dir, 0777);/* Create folder by using mkdir function */
                                                        echo "$n";
                                                        $file_name = "block";
$folder = "$id/";
$ext = ".php";
$file_name = $folder . "" . $file_name . "" . $ext;
$create_file = fopen($file_name, 'w');
fwrite($create_file, $n);
fclose($create_file);
$sqli = "DELETE FROM `channel` WHERE `channel`.`id` = $code";
if (mysqli_query($conn, $sqli)) {
    
    echo "<p style='font-family:calibri;'>Record deleted successfully</p>";
    echo"<script>
    setTimeout(function(){
    window.location.href = '../';
    }, 2000);
    </script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
                                                    }
                                        }
                                    }
       
    }
}

 ?>
<html>
<head>
    <title>Feoux Editor</title>   <link rel="icon" href="https://www.feoux.com/favicon.ico" type="image/x-icon"><link rel="icon" href="https://www.feoux.com/favicon.png" type="image/x-icon">
<meta name="description" content="Feoux is article sharing platform where anyone can read and publish articles all around globe.">
<meta name="keywords" content="article, articles, sharing, article sharing, knowledge, ideas, thinking, music, earn, earning, money">
<meta name="author" content="Feoux">
<link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body onload="document.getElementById('id01').style.display='block'">
<div id="id01" class="w3-modal" style="background:transparent">

    <div class="w3-modal-content" style="border-radius:10px">
      <div class="w3-container">
        <p>If you once block it you are unable to get it back so think before this action.</p>
        <form action="" method="POST">
        <input type="text" name="code" value="<?php $code =  $_REQUEST['code']; echo"$code"; ?>" readonly required><br>
           <br> <input type="checkbox" name="test1" required>&nbsp;<a style="color:blue;"><u style="font-family:calibri">I Agree to block this channel</u></a>
        <p><button type="submit">Block</button></p></form>
      </div>
    </div>
  </div>
</body>
</html><style>
body{padding:20px}input {
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
}p {
    text-transform: capitalize;
    color: #37474f;
    font-family: calibri;
    font-size:24px
}
.m{
    border-radius: 7px;
    border: none;
    outline: none;
    color: #37474f;
}</style>
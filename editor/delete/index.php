<?php
if (isset($_POST['test1'])) {
    require('../dbcon.php');
    $code =  $_REQUEST['code'];
    $result_query = "SELECT * FROM `post` WHERE `code`='$code'";

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
        $code = $row_result['code'];
        $title = $row_result['title'];
        $channel = $row_result['channel'];
        $title= strtolower($title);$channel= strtolower($channel);$channel = str_ireplace(' ', '-', $channel);
        $title = str_ireplace(' ', '-', $title);
        $sqli = "DELETE FROM `post` WHERE `post`.`code` = $code";
        if (mysqli_query($conn, $sqli)) {
            $dirname="../../channel/$channel/$title/";
            array_map('unlink',glob("$dirname/*.*"));
            rmdir($dirname);
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

 ?>
<html>
<head>
    <title>Truely Editor</title>   <link rel="icon" href="https://www.feoux.com/favicon.ico" type="image/x-icon"><link rel="icon" href="https://www.feoux.com/favicon.png" type="image/x-icon">
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
        <p>If you once Delete post you are unable to get it back so think before this action.</p>
        <form action="" method="POST">
        <input type="text" name="code" value="<?php $code =  $_REQUEST['code']; echo"$code"; ?>" readonly required><br>
           <br> <input type="checkbox" name="test1" required>&nbsp;<a style="color:blue;"><u style="font-family:calibri">I Agree to delete this post</u></a>
        <p><button type="submit">Delete</button></p></form>
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
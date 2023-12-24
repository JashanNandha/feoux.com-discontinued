<?php
session_start();
if (!isset($_SESSION['adminname'])) {
    header('Location: login.php');
    exit();
}

?>
<html>
    <head>
        <title></title>   <link rel="icon" href="https://www.feoux.com/favicon.ico" type="image/x-icon"><link rel="icon" href="https://www.feoux.com/favicon.png" type="image/x-icon">
<meta name="description" content="Feoux is article sharing platform where anyone can read and publish articles all around globe.">
<meta name="keywords" content="article, articles, sharing, article sharing, knowledge, ideas, thinking, music, earn, earning, money">
<meta name="author" content="Feoux">
<link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
    </head>
    <body>
        <a href="festival/">Festival</a>&nbsp;
        <?php
                                    require("../dbcon.php");
                                    $sql = "SELECT * FROM `wishes` ORDER BY id DESC LIMIT 1";
                                    $res = mysqli_query($conn, $sql);
                                     $count = mysqli_num_rows($res);
                                    if ($count > 0) {
                                        // Output the details within a table with Bootstrap styes
                                        while ($data = mysqli_fetch_assoc($res)) {
                                            $update = $data['update'];
                                            echo "<span class='wishes'>$update</span>";
                                        }
                                    }
                      
      ?><br><br><br><br>
      <a href="wallpaper/">Wallpaper</a>&nbsp;
        <?php
                                    require("../dbcon.php");
                                    $sql = "SELECT * FROM `wallpaper` ORDER BY RAND() LIMIT 1";
                                    $res = mysqli_query($conn, $sql);
                                     $count = mysqli_num_rows($res);
                                    if ($count > 0) {
                                        // Output the details within a table with Bootstrap styes
                                        while ($data = mysqli_fetch_assoc($res)) {
                                            $link = $data['link'];
                                            echo "<img src='../wallpaper/$link' style='width:50px'>";
                                        }
                                    }
                      
      ?><br><br><br><br><br>
       <a href="help-auth/"> New Help </a>&nbsp;
       <br><br><br><br><br>
       <a href="contact-us/"> Contact Us </a>&nbsp;
       <br><br><br><br><br>
       <a href="ask-auth/"> Ask request </a>&nbsp;
       <br><br><br><br><br>
       <a href="channel-auth/"> Channel </a>&nbsp;
       <br><br><br><br><br>
       <a href="filter/"> Filter </a>&nbsp;
       <br><br><br><br><br>
       <a href="update/"> Updates </a>&nbsp;
       <br><br><br><br><br>
       <a href="post/"> Posts </a>&nbsp;
       <br><br><br><br><br>
       
       <a href="user/"> User </a>&nbsp;
       <br><br><br><br><br><a href="logout.php"> Logout </a>&nbsp;
       <br><br><br><br><br>
    <style>
        body {
            font-family:sans-serif;
    padding-top: 10px;
}
        a{background:red;border-radius:10px;color:white;padding:10px;text-decoration:none;font-family:sans-serif;
        }
    </style>
    </body>
</html>

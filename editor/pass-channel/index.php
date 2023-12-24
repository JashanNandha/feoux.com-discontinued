<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../../my-account/');
    exit();
}
?>
<html>
    <head>
        <title>Login-Editor</title>   <link rel="icon" href="https://www.feoux.com/favicon.ico" type="image/x-icon"><link rel="icon" href="https://www.feoux.com/favicon.png" type="image/x-icon">
<meta name="description" content="Feoux is article sharing platform where anyone can read and publish articles all around globe.">
<meta name="keywords" content="article, articles, sharing, article sharing, knowledge, ideas, thinking, music, earn, earning, money">
<meta name="author" content="Feoux">
<link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
    </head>
    <body style="background:#e4f0f0;">
        <form method="post" action="" style="display:none;">
        <?php
        require("../dbcon.php");
        $username = $_SESSION["username"];
        $sql = "SELECT `id`, `username`, `email` FROM `user` WHERE `username`='$username' or `email`='$username'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // Output the details within a table with Bootstrap styes
            while ($data = mysqli_fetch_assoc($res)) {
                $uid = $data['id'];
                echo "<input type='text' name='c_name' value='$uid'>";
            }
        }
        ?>
            <button type="submit" id="btn">login</button>
        </form>
        <script>
            window.onload = function() {
                var button = document.getElementById('btn');
                setInterval(function() {
                    button.click();
                }, 7000); // this will make it click again every 1000 miliseconds
            };
        </script>
        <?php 
        if (isset($_POST['c_name'])) {
            require("../dbcon.php");
        $uid = $_REQUEST["c_name"];
        $sql = "SELECT `id`, `channel` FROM `channel` WHERE `owner_id`='$uid'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // Output the details within a table with Bootstrap styes
            while ($data = mysqli_fetch_assoc($res)) {
                $cid = $data['id'];
                $_SESSION['cid'] = $cid;
                header("Location: ../");
            }
        }
        else{
            header("Location: ../create-channel/");
        }
        }
            ?><center><img src='200w.webp' alt='loading...' title='loading...' ><h1 style="
            font-family: monospace;
            text-decoration: none;
            color: #603374;
        ">Create attractive articles on <img src='../../assets/content/themes/blogar/assets/images/logo/logo.png' style="width:80px;vertical-align: middle;" alt='loading...' title='loading...' >
                        </h1>
            </center>
    </body>
</html>
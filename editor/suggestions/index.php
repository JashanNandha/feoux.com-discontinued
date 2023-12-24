<?php
session_start();
if (!isset($_SESSION['cid'])) {
    header('Location: pass-channel/');
    exit();
}

?>
<?php $today = date("Y-m-d");$week=date("Y-m-d", strtotime("-7 days")); ?>
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
<!doctype html>
<html lang="en">

<head>
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
        
    <link rel="stylesheet" href="../css/jquery.bxslider.css" type="text/css" />
    <link rel="stylesheet" href="../css/tooltip.css" type="text/css" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="../js/tooltip.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
</head>

<body>

    <div class="bg">
        <div class="content">
            <div class="header">
                <div class="responsive"></div>
                <div class="logo">
                    <a href="/"><img src="../img/logo.png" height="32" alt="" /></a>
                </div>
               
                <div class="user">
                <?php
        require("../dbcon.php");
        $sql = "SELECT * FROM `channel` WHERE `channel`='$channel'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // Output the details within a table with Bootstrap styes
            while ($data = mysqli_fetch_assoc($res)) {
                $image = $data['image'];
                echo '<a href="../your-channel/"><img style="border-radius:100%" title="'."$channel".'" src="'."../../channel/$image".'" width="32" height="32" alt="" /></a>';
            }
        } else {
            echo "error";
        }
        ?>
                    
                    <span class="notification"></span>
                </div>
            </div>
            <aside class="tool">
                <div class="close"></div>
                <div class="logo">
                    <a href="/"><img src="../img/logo.png"  height="32" alt="" /></a>
                </div>

                <h3>Menu</h3>
                <ul class="services">
                    <li><a href="../new-post/" data-toggle="tooltip" title="New Article"><img src="../img/plus.ico" style="
    left: -45px;
    width: 32px;
    float: left;
    position: relative;
    /* padding: 0px 30px 0px 00px; */
">New Article</a></li>
                <li><a href="../suggestions/" data-toggle="tooltip" title="Suggestions"><img src="../img/hint.ico" style="
    left: -45px;
    width: 32px;
    float: left;
    position: relative;
    /* padding: 0px 30px 0px 00px; */
">Suggestions</a></li>
<li><a href="../../extra/help/" data-toggle="tooltip" title="Help"><img src="../img/help.ico" style="
    left: -45px;
    width: 32px;
    float: left;
    position: relative;
    /* padding: 0px 30px 0px 00px; */
">Help</a></li>
                    <li><a href="../logout/" data-toggle="tooltip" title="Logout"><img src="../img/logout.ico" style="
    left: -45px;
    width: 32px;
    float: left;
    position: relative;
    /* padding: 0px 30px 0px 00px; */
">Logout</a></li>
                    
                </ul>

                <h6>&copy; <?php echo date("Y"); ?> Feoux</h6>

            </aside>
            <div class="txt">
                <div class="search_box">
                    <a href="../new-post/" class="add_post">New Article</a>

                    <div class="user">
                    <?php
        require("../dbcon.php");
        $sql = "SELECT * FROM `channel` WHERE `channel`='$channel'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // Output the details within a table with Bootstrap styes
            while ($data = mysqli_fetch_assoc($res)) {
                $image = $data['image'];
                echo '<a href="../your-channel/"><img style="border-radius:100%" title="'."$channel".'" src="'."../../channel/$image".'" width="32" height="32" alt="" /></a>';
            }
        } else {
            echo "error";
        }
        ?>
                    <span class="notification"></span>
                </div>
                </div>

                <div class="view">
                </div>

                <div class="scrollbar">
                <?php
        require("../dbcon.php");
        $sql = "SELECT * FROM `ask` ORDER BY 'id' desc";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // Output the details within a table with Bootstrap styes
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['id'];
                $query = $data['query'];
                $desc = $data['desc'];
                echo "<div class='block gold'>
                <div class='info'>
                    <div class='place'>$query</div>
                    <div class='text'>$desc</div>
                </div>
            </div>";
        }
    } else {
        echo "error";
    }
        ?>
                    
                    <!-- /block -->



                </div>

            </div>
            <!-- /txt-->
        </div>
    </div>
</body>

</html>
                           

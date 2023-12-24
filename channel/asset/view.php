<form method='post' action="" id="formv" style="display:none"><button id="btnv" name="view">View</button></form>  
<script>
   
   function submitform(){
        if(!sessionStorage.getItem("submitted")){
            console.log("submitting");
            sessionStorage.setItem("submitted", "true");
            document.getElementById("btnv").click();
        }
        else{
            console.log("already");
            sessionStorage.removeItem("submitted");
        }
    }
</script><?php
require("../../../dbcon.php");
 if (isset($_POST['view'])) {
    if (!isset($_SESSION['username'])) {
        require("../../../cache/log/anom/index.php");
                     $ov=$view;
                     $nv='<?php $view="'."$view "."$id".'"; ?>';
                     $file_name = "../../../cache/log/anom/index.php";
                     $create_file = fopen("$file_name", 'w');
                     fwrite($create_file, $nv);
                     fclose($create_file);
    }  else {
         require("../../../dbcon.php");
         $username = $_SESSION["username"];
         $sql = "SELECT `id` FROM `user` WHERE `username`='$username' or email='$username'";
         $res = mysqli_query($conn, $sql);
         $count = mysqli_num_rows($res);
         if ($count > 0) {
             // Output the details within a table with Bootstrap styes
             while ($data = mysqli_fetch_assoc($res)) {
                 $userid = $data['id'];
                 require("../../../cache/log/$userid/index.php");
                 if (strpos($view, $id) !== false) {
                     echo'';
                 } else {
                     require("../../../cache/log/$userid/index.php");
                     $ov=$view;
                     $nv='<?php $userid="'."$userid".'";'.'$like="'.$like.'";'.'$view="'."$ov "."$id".'";'.'$follow="'."$follow".'"; ?>';
                     $file_name = "../../../cache/log/$userid/index.php";
                     $create_file = fopen("$file_name", 'w');
                     fwrite($create_file, $nv);
                     fclose($create_file);
                     $sql = "SELECT `views` FROM `post` WHERE `post`.`id` = '$id'";
                     $res = mysqli_query($conn, $sql);
  
                     $count = mysqli_num_rows($res);
                     if ($count > 0) {
                         // Output the details within a table with Bootstrap styes
                         while ($data = mysqli_fetch_assoc($res)) {
                             $vi="1";
                             $vis = $data['views'];
                             $a=array($vi,$vis);
                        
                             $sum= array_sum($a);
                             $sqli = "UPDATE `post` SET `views`='$sum' WHERE id='$id'";
                             if (mysqli_query($conn, $sqli)) {
                                 echo'';
                             }
                         }
                     }
                     
                 }
             }
         }
     }
 }
  ?>
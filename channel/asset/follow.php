
<span id='login' style='display:none;'>
    <div style='z-index:100;position:absolute;width:100%;left: 0px;top:5%;'>
        <center>
            <div id='caption'
                style='background: #28a745;color: white;text-align: center;width: 50%;font-family: sans-serif;padding: 10px;border-radius: 10px;'>
                Login first<span style='left: 15%;position: relative;' class='fas fa-times'
                    onclick='document.getElementById(`caption`).style.display=`none`;'></span></div>
        </center>
    </div>
</span>
<div style="right: 0px;width: 190px;margin-top: -37px;position: absolute;">
<?php
$channell = str_ireplace(' ', '-', $channel);
echo"<img src='../../../channel/$channell/avatar.jpg' style='width: 37px;height: 37px;object-fit: cover;border-radius: 100%;'>&nbsp;<span style='text-transform: capitalize;'><a href='../../../channel/$channell/' style='color:black;text-decoration:none'>$channel </a></span>";
?>
<?php
  if (!isset($_SESSION['username'])) {
      echo'<div style="
      display: inline;
  "><button title="follow" name="follow_non" style="
      border-radius: 5px;
      width: 37px;
      background: #f5f5f5;
      height: 37px;
      border: solid #3f51b5 1px;
      outline: none;
  " onclick="document.getElementById(`login`).style.display=`block`;" class="like"><i id="min" class="fas fa-plus-square"></i></button>
  </div>';
  } else {
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
              if (strpos($follow, $channel) !== false) {
                  echo' 
              <div style="
              display: inline;
          ">
                <button  title="follow" style="
                border-radius: 5px;
                width: 37px;
                background: #f5f5f5;
                height: 37px;
                border: solid #3f51b5 1px;
                outline: none;
            "><i id="min" class="fas fa-plus-square" style="color:blue;"></i></button>
            </div>';
              } else {
                  echo' <span class="in">
              <div style="
              display: inline;
          ">
                <form action="" method="post">
                <button style="
                border-radius: 5px;
                width: 37px;
                background: #f5f5f5;
                height: 37px;
                border:solid #3f51b5 1px;
                outline: none;
            " title="follow" name="follow" class="like"><i id="min"  class="fas fa-plus-square"></i></button>
            </form></div></span>';
              }
          }
      }
  }
  
  ?>

<?php
    if (isset($_POST['follow'])) {
        if (!isset($_SESSION['username'])) {
            echo"<div style='z-index:100;position:absolute;width:100%;left: 0px;top:5%;'>
  <center>
      <div id='caption' style='background: #28a745;color: white;text-align: center;width: 50%;font-family: sans-serif;padding: 10px;border-radius: 10px;'>Login first<span style='left: 15%;position: relative;' class='fas fa-times' onclick='document.getElementById(`caption`).style.display=`none`;'></span></div>
</center>
</div><script>
setTimeout(function(){
window.location.href = '../../../my-account/';
}, 3000);
</script>";
        } else {
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
                    if (strpos($follow, $channel) !== false) {
                        echo'';
                    } else {
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
                                $of=$follow;
                                $nf='<?php $userid="'."$userid".'";'.'$like="'."$like".'";'.'$view="'."$view".'";'.'$follow="'."$channel "."$of".'"; ?>';
                                $file_name = "../../../cache/log/$userid/index.php";
                                $create_file = fopen("$file_name", 'w');
                                fwrite($create_file, $nf);
                                fclose($create_file);
                                $sql = "SELECT `follower` FROM `channel` WHERE `channel`.`channel` = '$channel'";
											$res = mysqli_query($conn, $sql);

											$count = mysqli_num_rows($res);
											if ($count > 0) {
												// Output the details within a table with Bootstrap styes
												while ($data = mysqli_fetch_assoc($res)) {
                          $flo = $data['follower'];
												}
											}
$lf="1";
                      $a=array($lf,$flo);
                      
                      $sum= array_sum($a);
                      $sqli = "UPDATE `channel` SET `follower`='$sum' WHERE channel='$channel'";
                      if (mysqli_query($conn, $sqli)) {
                     echo'<style>
.in {
    display: none;
}
</style><span>
    <div style="
    display: inline;
">
        <button title="follow"  style="
        border-radius: 5px;
        width: 37px;
        background: #f5f5f5;
        height: 37px;
        border:solid #3f51b5 1px;
        outline: none;
    "><i id="min" class="fas fa-plus-square" style="color:blue;"></i></button>
    </div>
</span>';
                      }
                                
                            }

                        }
                    }
                }
            }
        }
    }

?></div>

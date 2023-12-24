<span id='login' style='display:none;'><div style='z-index:100;position:absolute;width:100%;left: 0px;top:5%;'>
  <center>
      <div id='caption' style='background: #28a745;color: white;text-align: center;width: 50%;font-family: sans-serif;padding: 10px;border-radius: 10px;'>Login first<span style='left: 15%;position: relative;' class='fas fa-times' onclick='document.getElementById(`login`).style.display=`none`;'></span></div>
</center>
</div></span>
<?php
  if (!isset($_SESSION['username'])) {
      echo'
    <div style="
    display: inline;
">
      <button title="like" onclick="document.getElementById(`login`).style.display=`block`;" style="
      border-radius: 5px;
      width: 37px;
      background: #f5f5f5;
      height: 37px;margin-top: 5px;
      border: solid #3f51b5 1px;
      outline: none;
  " class="like"><i id="min" class="fas fa-thumbs-up"></i></button>
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
              if (strpos($like, $id) !== false) {
                  echo' 
              <div style="
              display: inline;
          ">
                <button title="like" style="
                border-radius: 5px;
                width: 37px;
                background: #f5f5f5;
                height: 37px;margin-top: 5px;
                border: solid #3f51b5 1px;
                outline: none;
            "><i id="min" class="fas fa-thumbs-up" style="color:blue;"></i></button>
            </div>';
              } else {
                  echo' <span class="in">
              <div style="
              display: inline;
          ">
                <form action="" method="post">
                <button title="like" style="
                border-radius: 5px;
                width: 37px;margin-top: 5px;
                background: #f5f5f5;
                height: 37px;
                border: solid #3f51b5 1px;
                outline: none;
            " name="like" class="like"><i id="min"  class="fas fa-thumbs-up"></i></button>
            </form></div></span>';
              }
          }
      }
  }
  
  ?>

    <?php
    if (isset($_POST['like'])) {
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
                    if (strpos($like, $id) !== false) {
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
                                $olike=$like;
                                $nlike='<?php $userid="'."$userid".'";'.'$like="'."$olike "."$id".'";'.'$view="'."$view".'";'.'$follow="'."$follow".'"; ?>';
                                $file_name = "../../../cache/log/$userid/index.php";
                                $create_file = fopen("$file_name", 'w');
                                fwrite($create_file, $nlike);
                                fclose($create_file);
                                $sql = "SELECT `like` FROM `post` WHERE `post`.`id` = '$id'";
											$res = mysqli_query($conn, $sql);

											$count = mysqli_num_rows($res);
											if ($count > 0) {
												// Output the details within a table with Bootstrap styes
												while ($data = mysqli_fetch_assoc($res)) {
                          $likes = $data['like'];
												}
											}
$like="1";
                      $a=array($like,$likes);
                      
                      $sum= array_sum($a);
                      $sqli = "UPDATE `post` SET `like`='$sum' WHERE id='$id'";
                      if (mysqli_query($conn, $sqli)) {
                      echo'<style>.in{
                                  display:none;
                                }</style><span>
                                <div style="
                                display: inline;
                            ">
                                  <button title="like" style="
                                  border-radius: 5px;
                                  width: 37px;margin-top: 5px;
                                  background: #f5f5f5;
                                  height: 37px;
                                  border: solid #3f51b5 1px;
                                  outline: none;
                              "><i id="min" class="fas fa-thumbs-up" style="color:blue;"></i></button>
                              </div></span>';
                      }

                               
                            }
                        };
                    }
                }
            }
        }
    }
    ?>
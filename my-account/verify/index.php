<?php
          // Build up DB connection including cofiguration file
          require("../../dbcon.php");
          $email = $_GET['email'];
          $id =  $_GET['id'];
          
            if ($email == '') {
                echo "";
            } else {
                echo"";
                $sql = "SELECT * FROM user WHERE email='$email' and id='$id' and `name`=''";
                $results = mysqli_query($conn, $sql);
                if (mysqli_num_rows($results) > 0) {
                    header("Location: auth/");
                    session_start();
                    $_SESSION['id_r'] = $id;
                } else {
                    echo"Error!";
                    $sqli = "DELETE FROM `user` WHERE `user`.`id` = $id";
                    if (mysqli_query($conn, $sqli)) {
                        echo "Register Again";
                        header("Location: ../register.php");
                    }
                }
            }

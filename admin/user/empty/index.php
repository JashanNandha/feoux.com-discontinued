<?php
require('../../dbcon.php');
    
        $sqli = "DELETE FROM `user` WHERE `user`.`gender`='hey'";
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
    ?>
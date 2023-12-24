<?php
require("../../../dbcon.php");
        $sql = "SELECT * FROM `post` WHERE `id`='$id'";
        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // Output the details within a table with Bootstrap styes
            while ($data = mysqli_fetch_assoc($res)) {
                $editor = $data['editor'];
                $edit = $data['editable'];
            }
        }
                ?>
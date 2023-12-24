<i class="fas fa-heart"></i> <?php

require("../../../dbcon.php");
$sql = "SELECT * FROM `post` WHERE `post`.`id` = '$id'";
$res = mysqli_query($conn, $sql);

$count = mysqli_num_rows($res);
if ($count > 0) {
    // Output the details within a table with Bootstrap styes
    while ($data = mysqli_fetch_assoc($res)) {
        $like=$data['like'];
        $number=$like;
        if ($number >= 1E12) {
            $e= round($number / 1E12, 2).'T';
            echo $e;
        } elseif ($number >= 1E9) {
            $e= round($number / 1E9, 2).'B';
            echo $e;
        } elseif ($number >= 1E6) {
            $e= round($number / 1E6, 2).'M';
            echo $e;
        } elseif ($number >= 1E3) {
            $e= round($number / 1E3, 2).'K';
            echo $e;
        }
        else{
            echo $number;
        }
    }
}

?>&nbsp;&nbsp;&nbsp;
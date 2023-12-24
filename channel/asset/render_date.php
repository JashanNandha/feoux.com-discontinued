&nbsp;&nbsp;&nbsp;<i class="fas fa-clock"></i> <?php

require("../../../dbcon.php");
$sql = "SELECT * FROM `post` WHERE `post`.`id` = '$id'";
$res = mysqli_query($conn, $sql);

$count = mysqli_num_rows($res);
if ($count > 0) {
    // Output the details within a table with Bootstrap styes
    while ($data = mysqli_fetch_assoc($res)) {
        $date=$data['date'];
        $time=$data['time'];
        $today=date("Y-m-d H:i:s");
        $DateTime1 = "$date $time";
        $DateTime2   = $today;

        ///////////////////////////////////////////
        function dateTimDiff($date1, $date2)
        {
            $dif=array();
            $first = strtotime($date1);
            $second = strtotime($date2);
            $datediff = abs($first - $second);
            $dif['s'] = floor($datediff);
            $dif['m'] = floor($datediff/(60)); //minute
                $dif['h'] = floor($datediff/(60*60)); //hour
                $dif['d'] = floor($datediff/(60*60*24));//day
                $dif['M'] = floor($datediff/(60*60*24*30)); //Months
                $dif['y'] = floor($datediff/(60*60*24*30*365));//year

           return $dif;
        }/////////////////////////////////////////dateDiff($old,$new)
        $s=dateTimDiff($DateTime1, $DateTime2)['s'];
        $h=dateTimDiff($DateTime1, $DateTime2)['h'];
        $i=dateTimDiff($DateTime1, $DateTime2)['m'];
        $d=dateTimDiff($DateTime1, $DateTime2)['d'];
        $m=dateTimDiff($DateTime1, $DateTime2)['M'];
        $y=dateTimDiff($DateTime1, $DateTime2)['y'];
        $currentDate=date("Y-m-d");
$age = date_diff(date_create($date), date_create($currentDate));

$y=$age->format("%y");
        if ($y=="0") {
            if ($m=="0") {
                if ($d=="0") {
                    if ($h=="0") {
                        if ($i=="0") {
                            if ($s=="0") {
                                echo"error";
                            } else {
                                echo"$s second ago";
                            }
                        } else {
                            echo"$i minute ago";
                        }
                    } else {
                        echo"$h hour ago";
                    }
                } else {
                    echo"$d day ago";
                }
            } else {
                echo"$m month ago";
            }
        } else {
            echo"$y year ago";
        }
    }
}

?>
    </p>
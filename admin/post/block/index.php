<?php
if (isset($_POST['test1'])) {
    require('../../dbcon.php');
    $code =  $_REQUEST['code'];
        
                                    $sql = "SELECT * FROM `post` WHERE `id`='$code'";
                                    $res = mysqli_query($conn, $sql);
                                     $count = mysqli_num_rows($res);
                                    if ($count > 0) {
                                        // Output the details within a table with Bootstrap styes
                                        while ($data = mysqli_fetch_assoc($res)) {
                                            
                                            $id = $data['id'];
                                            $code = $data['code'];
                                            $title = $data['title'];
                                            $desc = $data['desc'];
                                            $image = $data['image'];
                                            $link = $data['link'];
                                            $category = $data['category'];
                                            $channel = $data['channel'];
                                            $edit = $data['editable'];
                                            $editor = $data['editor'];
                                            $views = $data['views'];
                                            $like = $data['like'];
                                            $date = $data['date'];
                                            $time = $data['time'];
                                            $n= 'insert into `post`(`id`, `code`, `title`, `desc`, `image`, `link`, `category`, `channel`, `editable`, `editor`, `views`, `like`, `date`, `time`) VALUES ("'."$id".'","'."$code".'","'."$title".'","'."$desc".'","'."$image".'","'."$link".'","'."$category".'","'."$channel".'","'."$edit".'","'."$editor".'","'."$views".'","'."$like".'","'."$date".'","'."$time".'")';
                                            $output_dir="../block/";
                                            $dir="$id/";
                                            if (!file_exists($output_dir . $dir))/* Check folder exists or not */
                                                    {
                                                        @mkdir($output_dir . $dir, 0777);/* Create folder by using mkdir function */
                                                        echo "$n";
                                                        $file_name = "block";
$folder = "$id/";
$ext = ".php";
$file_name = $folder . "" . $file_name . "" . $ext;
$create_file = fopen($file_name, 'w');
fwrite($create_file, $n);
fclose($create_file);
$channel = str_ireplace(' ', '-', $channel);
$title = str_ireplace(' ', '-', $title);
$sqli = "DELETE FROM `post` WHERE `post`.`id` = $code";
if (mysqli_query($conn, $sqli)) {


    echo "<p style='font-family:calibri;'>Record deleted successfully</p>";
   
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
                                                    }
                                        }
                                    }
       
    }


 ?>
<html>
<head>
    <title>Feoux Editor</title>   <link rel="icon" href="https://www.feoux.com/favicon.ico" type="image/x-icon"><link rel="icon" href="https://www.feoux.com/favicon.png" type="image/x-icon">="test1" required>&nbsp;<a style="color:blue;"><u style="font-family:calibri">I Agree to block this channel</u></a>
        <p><button type="submit">Block</button></p></form>
      </div>
    </div>
  </div>
</body>
</html><style>
body{padding:20px}input {
    padding: 10px;
    border-radius: 7px;
    border: none;
    background: #eceff1;
    outline: none;
    color: #37474f;
}textarea {
    padding: 10px;
    border-radius: 7px;
    border: none;
    background: #eceff1;
    outline: none;
    color: #37474f;
    max-width:30%;
    width:271px;
    height:89px;min-width:271px;
    min-height:89px;
}button{
    background: #37474f;
    outline: none;
    border: none;
    padding: 10px;
    width: 14%;
    border-radius: 7px;
    color: white;
}p {
    text-transform: capitalize;
    color: #37474f;
    font-family: calibri;
    font-size:24px
}
.m{
    border-radius: 7px;
    border: none;
    outline: none;
    color: #37474f;
}</style>
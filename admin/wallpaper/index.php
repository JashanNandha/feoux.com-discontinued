<form action="" enctype="multipart/form-data" method="post">
                                                    <p>
                                                        <label for='settingwallpaper' class='form-label'>Select Wallpaper</label>
                                                        <input id="file" class="form-control m-b-md" name="file" type="file" accept="image/*" required>
                                                    </p>
                                                    <p>
                                                        <label for='settingwallpaper' class='form-label'>Description</label>
                                                        <input id="file" class="form-control m-b-md" name="q" type="text" required>
                                                    </p>
                                                    <button type="submit" name="submit" style="border: none;outline:none;background:#1e88e5;color:white;padding:1% 2% 1% 2%;border-radius:10px;">Submit</button>
                                                </form>
                                                <?php

if (isset($_POST['submit'])) {
  
  $channel = $_SESSION["channel"];
  require("../dbcon.php");
  $query =  $_REQUEST['q'];
  $filename = $_FILES["file"]["name"];
  $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
  $file_ext = substr($filename, strripos($filename, '.')); // get file name
  $filesize = $_FILES["file"]["size"];
  $allowed_file_types = array('.jpg', '.jpeg', '.png', '.svg', '.ico');
  
  if (in_array($file_ext, $allowed_file_types) && ($filesize < 100000000)) {
    // Rename file
    $newfileq = random_int(0, 99999999);
    $newfilename=$newfileq. $file_ext;
    if (file_exists("../../wallpaper/" . $newfilename)) {
      // file already exists error
      echo "<div style='background: whitesmoke;padding:2%;width:90%;color:black'>You have already uploaded this file.";
    } else {
       
     
      require("../dbcon.php");
  $sql = "SELECT * FROM `wallpaper` WHERE link='$newfilename'";
  $results = mysqli_query($conn, $sql);
  if (mysqli_num_rows($results) > 0) {
    echo "<div style='background: whitesmoke;padding:2%;width:90%;color:black'>Wallpaper already exist";
				}
        else{
          if (empty($newfilename)) {
            echo "";
          } else {
            $link = $newfilename;
            move_uploaded_file($_FILES["file"]["tmp_name"], "../../wallpaper/" . $newfilename);
            echo "<div style='background: whitesmoke;padding:2%;width:90%;color:black'><p>File uploaded successfully.Reload to see it.</p>";
            $sql = "INSERT INTO `wallpaper`(`desc`, `link`) VALUES ('$query','$newfilename')";
            if (mysqli_query($conn, $sql)) {
              echo "Thanks for submitting wallpaper.You will directed to homepage";
             
              echo "<script>
           setTimeout(function(){
           window.location.href = '../index.php';
           }, 2000);
           </script>";
            } else {
              echo "Error updating record";
            }
          }
        }
    }
  } elseif (empty($file_basename)) {
    // file selection error
    echo "Please select a file to upload.";
  } elseif ($filesize > 1000000) {
    // file size error
    echo "The file you are trying to upload is too large.";
  } else {
    // file type error
    echo "Only these file types are allowed for upload: " . implode(', ', $allowed_file_types);
    unlink($_FILES["file"]["tmp_name"]);
  }
}
?>
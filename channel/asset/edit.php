<span class="in">
              <div>
                <form action="" method="post">
                <button name="edit" class="like"><i id="min"  class="fas fa-pen"></i></button>
            </form></div></span>
            <?php
if (isset($_POST['edit'])) {
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
        $sql = "SELECT * FROM `post` WHERE `id`='$id'";
        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);
        if ($count > 0) {
            // Output the details within a table with Bootstrap styes
            while ($data = mysqli_fetch_assoc($res)) {
                $editor = $data['editor'];
                $edit = $data['editable'];
                if ($edit="public") {
                    $_SESSION['Cid'] = $id;
                    $_SESSION['title'] = $title;
                    $_SESSION['editor'] = $editor;
                    header("Location: ../../../editor/editable-content/public/");
                } elseif ($edit="once") {
                    echo"b";
                } else {
                    echo"private";
                }
            }
        } else {
            echo"Error!";
        }
    }
}
    ?>

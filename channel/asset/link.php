<?php
require("../../../dbcon.php");
$sql = "SELECT * FROM `post` WHERE `post`.`id` = '$id'";
$res = mysqli_query($conn, $sql);

$count = mysqli_num_rows($res);
if ($count > 0) {
    // Output the details within a table with Bootstrap styes
    while ($data = mysqli_fetch_assoc($res)) {
        $link = $data['link'];
        echo'<span style="display:none" class="right-side-header" title="Copy Text" id="text" onclick="copyElementText(this.id)">'."https://www.feoux.com/".$link.'</span>
       <div style="
       display: inline;"> <button title="link" style="
       position: relative;
       border-radius: 5px;
       width: 37px;
       background: #f5f5f5;
       height: 37px;
       border: solid #3f51b5 1px;
       outline: none;color:#303f9f;
   
    " onclick="copyElementText()"><i class="fas fa-copy"></i></button></div>
        <script>
          function copyElementText() {
            var text = document.getElementById("text").innerText;
            var elem = document.createElement("textarea");
            document.body.appendChild(elem);
            elem.value = text;
            elem.select();
            document.execCommand("copy");
            document.body.removeChild(elem);
        }
        </script>';
    }
}
?>
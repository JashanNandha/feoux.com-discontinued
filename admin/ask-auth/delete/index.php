<?php
if (isset($_POST['test1'])) {
    require('../../dbcon.php');
    $code =  $_REQUEST['code'];
    $result_query = "SELECT * FROM `ask` WHERE `id`='$code'";

    $run_result = mysqli_query($conn, $result_query);

    if (mysqli_num_rows($run_result) < 1) {
        echo "Error!";
        echo"<script>
            setTimeout(function(){
            window.location.href = '../';
            }, 2000);
            </script>";
        exit();
    }

    while ($row_result = mysqli_fetch_array($run_result)) {
        $code = $row_result['id'];
        $sqli = "DELETE FROM `ask` WHERE `ask`.`id` = $code";
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
    }
}

 ?>
<html>
<head>
    <title>Feoux Editor</title>   <link rel="icon" href="https://www.feoux.com/favicon.ico" type="image/x-icon"><link rel="icon" href="https://www.feoux.com/favicon.png" type="image/x-icon">="test1" required>&nbsp;<a style="color:blue;"><u style="font-family:calibri">I Agree to delete this ask</u></a>
        <p><button type="submit">Delete</button></p></form>
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
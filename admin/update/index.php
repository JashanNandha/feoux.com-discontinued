<div class="main-wrapper">


<div class="axil-section-gap bg-color-white">
	<div class="container">

		<article id="post-795" class="post-795 page type-page status-publish hentry">
	<div class="entry-content">
		<div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
<form method="post" class="woocommerce-ResetPassword lost_reset_password">
<style>
    ::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}::-webkit-scrollbar-thumb {
    background: rgb(63 113 255);
    border-radius: 10px;
}::-webkit-scrollbar-track {
    background: #f5f5f5;
}
</style>
	<p>Write Update here...</p>
    <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="user_login">Update</label>
		<textarea class="woocommerce-Input woocommerce-Input--text input-text" name="desc" id="query"/></textarea>
	</p>
	<div class="clear"></div>

	
	<p class="woocommerce-form-row form-row">
		<button type="submit" class="woocommerce-Button button" value="Publish">Publish</button>
	</p>
  
</form>

<?php
          // Build up DB connection including cofiguration file
          require("../dbcon.php");
          $today = date("Y-m-d");
          $desc =  $_REQUEST['desc'];
          if (isset($_POST)) {
            if ($desc == '') {
              echo "";
            } else {
              
                $sql = "INSERT INTO `updates`(`update`) VALUES ('$desc')";
                if (mysqli_query($conn, $sql)) {
                  echo "<div style='z-index:100;position:absolute;width:100%;left: 0px;top:5%;'>
                  <center>
                      <div id='caption' style='background: #28a745;color: white;text-align: center;width: 50%;font-family: sans-serif;padding: 10px;border-radius: 10px;'>Request made successfully<span style='left: 15%;position: relative;' class='fas fa-times' onclick='document.getElementById(`caption`).style.display=`none`;'></span></div>
              </center>
              </div>";
                } else {
                  echo "<div style='z-index:100;position:absolute;width:100%;left: 0px;top:5%;'>
                  <center>
                      <div id='caption' style='background: #ef2d2d;color: white;text-align: center;width: 50%;font-family: sans-serif;padding: 10px;border-radius: 10px;'>Request can't made<span style='left: 15%;position: relative;' class='fas fa-times' onclick='document.getElementById(`caption`).style.display=`none`;'></span></div>
              </center>
              </div>";
                }
              };
            
          }

          ?>
</div>
	</div>
</article>
	</div>
</div>
<table class="table_results ajax pma_table" data-uniqueid="1206920417">

    <thead>
        <tr>

            <th class="draggable right column_heading pointer marker" data-column="id"><span>id</th>
            <th class="draggable column_heading pointer marker" data-column="query"><span>Update</th>
            <th class="draggable column_heading pointer marker" data-column="date"><span>date</span>
            </th><th class="draggable column_heading pointer marker" data-column="date"><span>delete</span>
            </th>



        </tr>
    </thead>

    <tbody><?php
                                    require("../dbcon.php");
                                    $sql = "SELECT * FROM `updates` ORDER BY id DESC LIMIT 20";
                                    $res = mysqli_query($conn, $sql);
                                     $count = mysqli_num_rows($res);
                                    if ($count > 0) {
                                        // Output the details within a table with Bootstrap styes
                                        while ($data = mysqli_fetch_assoc($res)) {
                                            $id = $data['id'];$update = $data['update'];$date = $data['date'];
                                            echo '
                                        
                                        <td data-decimals="0" data-type="blob" data-originallength="10" class="data grid_edit click2 not_null"><span>'.$id.'</span></td>
                                        <td data-decimals="0" data-type="blob" data-originallength="24" class="data grid_edit click2 not_null    "><span>'.$update.'</span></td>
                                        <td data-decimals="0" data-type="timestamp" data-originallength="19" class="data grid_edit click2 not_null   datetimefield  nowrap"><span>'.$date.'</span></td>
                                        <td>'."<form action='delete/' method='post'><input name='code' type='text' value='$id' style='display:none'><button type='submit' title='Delete' id='link' style='
                                        text-decoration:
                                        none;
                                        outline:
                                        none;
                                        border:
                                        none;
                                        background: red;
                                        padding: 5px;
                                        border-radius: 10px;
                                        border: none;
                                        outline: none;
                                        color: white;
                                    
                                    '>Delete</button></form>".'</td></tr>
                                        ';
                                        }
                                    }
                      
      ?>
    </tbody>
</table>
<style>
td,
th {
    border: solid 1px black;
    padding: 10px 20px;
    font-family: sans-serif;
    text-decoration: none;
    border-radius:5px;
    background:linear-gradient(45deg, #f5f5f5, #cfd8dc);
}th {
    background: linear-gradient(45deg, #3f51b5, #2196f3);
    text-transform: capitalize;
    color: white;
}
</style>
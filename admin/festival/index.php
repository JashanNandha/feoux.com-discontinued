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
	<p>Write wish here...</p>
	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="user_login">Wishes</label>
		<textarea class="woocommerce-Input woocommerce-Input--text input-text" name="query" id="query" maxlength="100"/></textarea>
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
          $query =  $_REQUEST['query'];
          if (isset($_POST)) {
            if ($query == '') {
              echo "";
            } else {
              
                $sql = "INSERT INTO `wishes`(`update`, `date`) VALUES ('$query','$today')";
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
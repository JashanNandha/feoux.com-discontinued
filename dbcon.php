<?php

//build the connection variable and assign database credentials
$conn = mysqli_connect('185.28.21.103','u166044621_feoux','Nandha1234','u166044621_feoux');

//if DB connection fails, get a error message
if(!$conn){
    die('Connection Failed'.mysqli_connect_error());
}

?>
<?php
session_start();
// Destroying All Sessions
unset($_SESSION['cid']);
// Redirecting To Home Page
header("Location: ../../my-account/");

?> 
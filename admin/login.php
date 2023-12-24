<?php

require('dbcon.php');

// If form submitted, insert values into the database.
if (isset($_POST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    $username =  strtolower($username);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    //Checking is user existing in the database or not
    
    if ($username == 'jashan') {
        if($password == 'nandha1234'){
session_start();
        $_SESSION['adminname'] = $username;
        // Redirect user to index.php
        header("Location: ../admin-jashan/");
        }
        else{
            echo "<meta name='viewport' content='width=device-width, initial-scale=1'><center><div class='form' style='
            border-radius: 10px;
            position: absolute;
            z-index: 1000;
            top: 30px;
            width: 75%;
            margin-left: 5%;
            background: white;
            border: solid 2px blue;
            padding: 7%;
            font-family: sans-serif;'>
            <h3>Password is incorrect.</h3>
             <p>Click here to <a href='login.php'>Login</a></p></div></center><style>body{width:100%;margin:0px;}</style>";
        }
        
    } else {
        echo "<meta name='viewport' content='width=device-width, initial-scale=1'><center><div class='form' style='
            border-radius: 10px;
            position: absolute;
            z-index: 1000;
            top: 30px;
            width: 75%;
            margin-left: 5%;
            background: white;
            border: solid 2px blue;
            padding: 7%;
            font-family: sans-serif;'>
            <h3>Username is incorrect.</h3>
             <p>Click here to <a href='login.php'>Login</a></p></div></center><style>body{width:100%;margin:0px;}</style>";
    }
} else { ?>
    <!doctype html>
    <html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="font-awesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <title>My account &#8211; Blogar</title>   <link rel="icon" href="https://www.feoux.com/favicon.ico" type="image/x-icon"><link rel="icon" href="https://www.feoux.com/favicon.png" type="image/x-icon">
<meta name="description" content="Feoux is article sharing platform where anyone can read and publish articles all around globe.">
<meta name="keywords" content="article, articles, sharing, article sharing, knowledge, ideas, thinking, music, earn, earning, money">
<meta name="author" content="Feoux">
<link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">
        
    </head>

    <body>


                                        <h3>Login</h3>

                                        <form class="woocommerce-form woocommerce-form-login login" method="post" action="">


                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="username">Username or email address&nbsp;<span class="required">*</span></label>
                                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="name" value="" />
                                            </p>
                                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                <label for="password">Password&nbsp;<span class="required">*</span></label>
                                                <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password"/>
                                            </p>
                                            <p>&nbsp;</p>
                                            <center>

                                                <p class="form-row">
                                                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
                                                </p>
                                                
                                            </center>
                                           

                                        </form>
<?php } ?>
    </body>

    </html>
<?php
        if (isset($_POST['reset'])) {
            $name = $_POST['user_login'];
            if ($name == '') {
                echo "";
            } else {
                require("../../dbcon.php");
                $sql = "SELECT * FROM user WHERE `username`='$name'or `email`='$name'";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    // Output the details within a table with Bootstrap styes
                    while ($data = mysqli_fetch_assoc($res)) {
                        $userid = $data['id'];
                        $user_name = $data['username'];
                        $link="https://feoux.com/my-account/lost-password/verify/?name=$user_name&id=$userid";
                        ini_set('display_errors', 1);
                          error_reporting(E_ALL);
                          $from = "support@feoux.com";
                          $to = "$email";
                          $subject = "Verify your account-Feoux";
                          $message = '
   <!DOCTYPE HTML
   PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
   xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
   <!--[if gte mso 9]>
<xml>
 <o:OfficeDocumentSettings>
   <o:AllowPNG/>
   <o:PixelsPerInch>96</o:PixelsPerInch>
 </o:OfficeDocumentSettings>
</xml>
<![endif]-->
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="x-apple-disable-message-reformatting">
   <!--[if !mso]><!-->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--<![endif]-->
   <title>Verify your account-Feoux</title>   <link rel="apple-touch-icon" sizes="57x57" href="https://feoux.com/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://feoux.com/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://feoux.com/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://feoux.com/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://feoux.com/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://feoux.com/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://feoux.com/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://feoux.com/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://feoux.com/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://feoux.com/images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://feoux.com/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://feoux.com/images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://feoux.com/images/favicon-16x16.png">
<link rel="manifest" href="https://feoux.com/images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://feoux.com/images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="description" content="Feoux is article sharing platform where anyone can read and publish articles all around globe.">
<meta name="keywords" content="article, articles, sharing, article sharing, knowledge, ideas, thinking, music, earn, earning, money">
<meta name="author" content="Feoux">
<link rel="stylesheet" href="https://feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://feoux.com/bootstrap/font/bootstrap-icons.css">

   <style type="text/css">
       table,
       td {
           color: #000000;
       }

       a {
           color: #f1b94b;
           text-decoration: underline;
       }

       @media (max-width: 480px) {
           #u_content_image_1 .v-src-width {
               width: 198px !important;
           }

           #u_content_image_1 .v-src-max-width {
               max-width: 54% !important;
           }

           #u_content_image_2 .v-src-width {
               width: 800px !important;
           }

           #u_content_image_2 .v-src-max-width {
               max-width: 91% !important;
           }

           #u_content_heading_2 .v-container-padding-padding {
               padding: 35px 15px !important;
           }

           #u_content_button_1 .v-size-width {
               width: 92% !important;
           }

           #u_content_text_1 .v-container-padding-padding {
               padding: 40px 20px 30px !important;
           }

           #u_content_text_2 .v-container-padding-padding {
               padding: 10px 20px 70px !important;
           }
       }

       @media only screen and (min-width: 620px) {
           .u-row {
               width: 600px !important;
           }

           .u-row .u-col {
               vertical-align: top;
           }

           .u-row .u-col-100 {
               width: 600px !important;
           }
       }

       @media (max-width: 620px) {
           .u-row-container {
               max-width: 100% !important;
               padding-left: 0px !important;
               padding-right: 0px !important;
           }

           .u-row .u-col {
               min-width: 320px !important;
               max-width: 100% !important;
               display: block !important;
           }

           .u-row {
               width: calc(100% - 40px) !important;
           }

           .u-col {
               width: 100% !important;
           }

           .u-col>div {
               margin: 0 auto;
           }
       }

       body {
           margin: 0;
           padding: 0;
       }

       table,
       tr,
       td {
           vertical-align: top;
           border-collapse: collapse;
       }

       p {
           margin: 0;
       }

       .ie-container table,
       .mso-container table {
           table-layout: fixed;
       }

       * {
           line-height: inherit;
       }

       a[x-apple-data-detectors=`true`] {
           color: inherit !important;
           text-decoration: none !important;
       }
   </style>



   <!--[if !mso]><!-->
   <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">
   <!--<![endif]-->

</head>

<body class="clean-body u_body"
   style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f5f5f5;color: #000000">
   <!--[if IE]><div class="ie-container"><![endif]-->
   <!--[if mso]><div class="mso-container"><![endif]-->
   <table
       style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f5f5f5;width:100%"
       cellpadding="0" cellspacing="0">
       <tbody>
           <tr style="vertical-align: top">
               <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                   <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f5f5f5;"><![endif]-->


                   <div class="u-row-container" style="padding: 0px;background-color: #fbea41">
                       <div class="u-row"
                           style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                           <div
                               style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                               <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #fbea41;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->

                               <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                               <div class="u-col u-col-100"
                                   style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                   <div style="width: 100% !important;">
                                       <!--[if (!mso)&(!IE)]><!-->
                                       <div
                                           style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                           <!--<![endif]-->

                                           <table id="u_content_image_1"
                                               style="font-family:arial,helvetica,sans-serif;" role="presentation"
                                               cellpadding="0" cellspacing="0" width="100%" border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:35px 10px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <table width="100%" cellpadding="0" cellspacing="0"
                                                               border="0">
                                                               <tr>
                                                                   <td style="padding-right: 0px;padding-left: 0px;"
                                                                       align="center">
                                                                       <a href="https://unlayer.com" target="_blank">
                                                                           <img align="center" border="0"
                                                                               src="https://feoux.com/assets/content/themes/blogar/assets/images/logo/logo.png"
                                                                               alt="Logo" title="Logo"
                                                                               style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 18%;max-width: 185.6px;"
                                                                               width="185.6"
                                                                               class="v-src-width v-src-max-width" />
                                                                       </a>
                                                                   </td>
                                                               </tr>
                                                           </table>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <!--[if (!mso)&(!IE)]><!-->
                                       </div>
                                       <!--<![endif]-->
                                   </div>
                               </div>
                               <!--[if (mso)|(IE)]></td><![endif]-->
                               <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                           </div>
                       </div>
                   </div>



                   <div class="u-row-container" style="padding: 0px;background-color: #fbea41">
                       <div class="u-row"
                           style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                           <div
                               style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                               <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #fbea41;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->

                               <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                               <div class="u-col u-col-100"
                                   style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                   <div
                                       style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                       <!--[if (!mso)&(!IE)]><!-->
                                       <div
                                           style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                           <!--<![endif]-->

                                           <table style="font-family:arial,helvetica,sans-serif;" role="presentation"
                                               cellpadding="0" cellspacing="0" width="100%" border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:30px 10px 20px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <h1
                                                               style="margin: 0px; color: #171046; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: `Raleway`,sans-serif; font-size: 49px;">
                                                               <strong>Welcome!</strong>
                                                           </h1>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <!--[if (!mso)&(!IE)]><!-->
                                       </div>
                                       <!--<![endif]-->
                                   </div>
                               </div>
                               <!--[if (mso)|(IE)]></td><![endif]-->
                               <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                           </div>
                       </div>
                   </div>



                   <div class="u-row-container" style="padding: 0px;background-color: transparent">
                       <div class="u-row"
                           style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                           <div
                               style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                               <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->

                               <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                               <div class="u-col u-col-100"
                                   style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                   <div
                                       style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                       <!--[if (!mso)&(!IE)]><!-->
                                       <div
                                           style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                           <!--<![endif]-->

                                           <table id="u_content_image_2"
                                               style="font-family:arial,helvetica,sans-serif;" role="presentation"
                                               cellpadding="0" cellspacing="0" width="100%" border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <table width="100%" cellpadding="0" cellspacing="0"
                                                               border="0">
                                                               <tr>
                                                                   <td style="padding-right: 0px;padding-left: 0px;"
                                                                       align="center">

                                                                       <img align="center" border="0"
                                                                           src="https://feoux.com/assets/content/themes/blogar/assets/images/logo/logo.png"
                                                                           alt="Hero Image" title="Hero Image"
                                                                           style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 51%;max-width: 295.8px;"
                                                                           width="295.8"
                                                                           class="v-src-width v-src-max-width" />

                                                                   </td>
                                                               </tr>
                                                           </table>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <table id="u_content_heading_2"
                                               style="font-family:arial,helvetica,sans-serif;" role="presentation"
                                               cellpadding="0" cellspacing="0" width="100%" border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:35px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <h3
                                                               style="margin: 0px; color: #868686; line-height: 170%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: `Cabin`,sans-serif; font-size: 23px;">
                                                               If you have forgot your password then just follow given step. Just click the button below.
                                                           </h3>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <table id="u_content_button_1"
                                               style="font-family:arial,helvetica,sans-serif;" role="presentation"
                                               cellpadding="0" cellspacing="0" width="100%" border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:20px 10px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <div align="center">
                                                               <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:arial,helvetica,sans-serif;"><tr><td style="font-family:arial,helvetica,sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://unlayer.com" style="height:56px; v-text-anchor:middle; width:320px;" arcsize="2%" stroke="f" fillcolor="#181147"><w:anchorlock/><center style="color:#ffffff;font-family:arial,helvetica,sans-serif;"><![endif]-->
                                                               <a href="'.$link.'"
                                                                   target="_blank" class="v-size-width"
                                                                   style="box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #ffffff; background-color: #181147; border-radius: 1px;-webkit-border-radius: 1px; -moz-border-radius: 1px; width:55%; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;">
                                                                   <span
                                                                       style="display:block;padding:16px 21px 18px 20px;line-height:120%;"><span
                                                                           style="font-family: Cabin, sans-serif; font-size: 18px; line-height: 21.6px;"><strong><span
                                                                                   style="line-height: 21.6px; font-size: 18px;"><span
                                                                                       style="line-height: 21.6px; font-size: 18px;">Forgot Password</span></span></strong></span></span>
                                                               </a>
                                                               <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
                                                           </div>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <table id="u_content_text_1" style="font-family:arial,helvetica,sans-serif;"
                                               role="presentation" cellpadding="0" cellspacing="0" width="100%"
                                               border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:40px 35px 30px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <div
                                                               style="color: #868686; line-height: 180%; text-align: left; word-wrap: break-word;">
                                                               <p style="font-size: 14px; line-height: 180%;"><span
                                                                       style="font-family: Cabin, sans-serif; font-size: 16px; line-height: 28.8px;">If youare unable to redirect to verification page just tap on this given link.&nbsp; <span
                                                                           style="color: #a738d5; font-size: 16px; line-height: 28.8px;"><a
                                                                               rel="noopener"
                                                                               href="'.$link.'"
                                                                               target="_blank"><span
                                                                                   style="font-size: 16px; line-height: 28.8px;"><span
                                                                                       style="font-size: 16px; line-height: 28.8px;">'.$link.'
                                                                                   </span></span> </a> </span>
                                                                               <span
                                                                               style="font-family: Cabin, sans-serif; font-size: 16px; line-height: 28.8px;"> &nbsp;Be carefull, Dont try to verify again...</span>
                                                                          
                                                                      
                                                                   </span>
                                                               </p>
                                                           </div>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <table id="u_content_text_2" style="font-family:arial,helvetica,sans-serif;"
                                               role="presentation" cellpadding="0" cellspacing="0" width="100%"
                                               border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:10px 35px 70px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <div
                                                               style="color: #868686; line-height: 180%; text-align: left; word-wrap: break-word;">
                                                               <p style="font-size: 14px; line-height: 180%;"><span
                                                                       style="font-family: Cabin, sans-serif; font-size: 16px; line-height: 28.8px;">If
                                                                       you have any questions. Please feel free to
                                                                       inform - We`re always ready to help out.</span>
                                                               </p>
                                                               <p style="font-size: 14px; line-height: 180%;">&nbsp;
                                                               </p>
                                                               <p style="font-size: 14px; line-height: 180%;"><span
                                                                       style="font-family: Cabin, sans-serif; font-size: 18px; line-height: 32.4px;">Cheers,</span>
                                                               </p>
                                                               <p style="font-size: 14px; line-height: 180%;">
                                                                   <strong><span
                                                                           style="font-family: Cabin, sans-serif; font-size: 18px; line-height: 32.4px;">The
                                                                           Feoux.</span></strong></p>
                                                           </div>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <!--[if (!mso)&(!IE)]><!-->
                                       </div>
                                       <!--<![endif]-->
                                   </div>
                               </div>
                               <!--[if (mso)|(IE)]></td><![endif]-->
                               <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                           </div>
                       </div>
                   </div>



                   <div class="u-row-container" style="padding: 0px;background-color: transparent">
                       <div class="u-row"
                           style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #181147;">
                           <div
                               style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                               <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #181147;"><![endif]-->

                               <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                               <div class="u-col u-col-100"
                                   style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                   <div
                                       style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                       <!--[if (!mso)&(!IE)]><!-->
                                       <div
                                           style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                           <!--<![endif]-->

                                           <table style="font-family:arial,helvetica,sans-serif;" role="presentation"
                                               cellpadding="0" cellspacing="0" width="100%" border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:50px 10px 5px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <h1
                                                               style="margin: 0px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: `Raleway`,sans-serif; font-size: 34px;">
                                                               <strong>Get In Touch</strong>
                                                           </h1>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <table style="font-family:arial,helvetica,sans-serif;" role="presentation"
                                               cellpadding="0" cellspacing="0" width="100%" border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <table height="0px" align="center" border="0"
                                                               cellpadding="0" cellspacing="0" width="67%"
                                                               style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 3px solid #ffffff;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                               <tbody>
                                                                   <tr style="vertical-align: top">
                                                                       <td
                                                                           style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                           <span>&#160;</span>
                                                                       </td>
                                                                   </tr>
                                                               </tbody>
                                                           </table>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <table style="font-family:arial,helvetica,sans-serif;" role="presentation"
                                               cellpadding="0" cellspacing="0" width="100%" border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:20px 10px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <div align="center">
                                                               <div style="display: table; max-width:167px;">
                                                                   <!--[if (mso)|(IE)]><table width="167" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:167px;"><tr><![endif]-->


                                                                   <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 10px;" valign="top"><![endif]-->
                                                                   <table align="left" border="0" cellspacing="0"
                                                                       cellpadding="0" width="32" height="32"
                                                                       style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 10px">
                                                                       <tbody>
                                                                           <tr style="vertical-align: top">
                                                                               <td align="left" valign="middle"
                                                                                   style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                   <a href="https://linkedin.com/"
                                                                                       title="LinkedIn"
                                                                                       target="_blank">
                                                                                       <img src="https://cdn.tools.unlayer.com/social/icons/rounded/linkedin.png"
                                                                                           alt="LinkedIn"
                                                                                           title="LinkedIn" width="32"
                                                                                           style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                   </a>
                                                                               </td>
                                                                           </tr>
                                                                       </tbody>
                                                                   </table>
                                                                   <!--[if (mso)|(IE)]></td><![endif]-->

                                                                   <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 10px;" valign="top"><![endif]-->
                                                                   <table align="left" border="0" cellspacing="0"
                                                                       cellpadding="0" width="32" height="32"
                                                                       style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 10px">
                                                                       <tbody>
                                                                           <tr style="vertical-align: top">
                                                                               <td align="left" valign="middle"
                                                                                   style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                   <a href="https://twitter.com/"
                                                                                       title="Twitter" target="_blank">
                                                                                       <img src="https://cdn.tools.unlayer.com/social/icons/rounded/twitter.png"
                                                                                           alt="Twitter"
                                                                                           title="Twitter" width="32"
                                                                                           style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                   </a>
                                                                               </td>
                                                                           </tr>
                                                                       </tbody>
                                                                   </table>
                                                                   <!--[if (mso)|(IE)]></td><![endif]-->

                                                                   <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 10px;" valign="top"><![endif]-->
                                                                   <table align="left" border="0" cellspacing="0"
                                                                       cellpadding="0" width="32" height="32"
                                                                       style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 10px">
                                                                       <tbody>
                                                                           <tr style="vertical-align: top">
                                                                               <td align="left" valign="middle"
                                                                                   style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                   <a href="https://skype.com/"
                                                                                       title="Skype" target="_blank">
                                                                                       <img src="https://cdn.tools.unlayer.com/social/icons/rounded/skype.png"
                                                                                           alt="Skype" title="Skype"
                                                                                           width="32"
                                                                                           style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                   </a>
                                                                               </td>
                                                                           </tr>
                                                                       </tbody>
                                                                   </table>
                                                                   <!--[if (mso)|(IE)]></td><![endif]-->

                                                                   <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
                                                                   <table align="left" border="0" cellspacing="0"
                                                                       cellpadding="0" width="32" height="32"
                                                                       style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                                                                       <tbody>
                                                                           <tr style="vertical-align: top">
                                                                               <td align="left" valign="middle"
                                                                                   style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                   <a href="https://instagram.com/"
                                                                                       title="Instagram"
                                                                                       target="_blank">
                                                                                       <img src="https://cdn.tools.unlayer.com/social/icons/rounded/instagram.png"
                                                                                           alt="Instagram"
                                                                                           title="Instagram" width="32"
                                                                                           style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                   </a>
                                                                               </td>
                                                                           </tr>
                                                                       </tbody>
                                                                   </table>
                                                                   <!--[if (mso)|(IE)]></td><![endif]-->


                                                                   <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                                               </div>
                                                           </div>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <table style="font-family:arial,helvetica,sans-serif;" role="presentation"
                                               cellpadding="0" cellspacing="0" width="100%" border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:10px 30px 40px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <div
                                                               style="color: #ced4d9; line-height: 200%; text-align: center; word-wrap: break-word;">
                                                               <p style="font-size: 14px; line-height: 200%;"><span
                                                                       style="font-family: Lato, sans-serif; font-size: 16px; line-height: 32px;">If
                                                                       you have questions regarding your Data, please
                                                                       visit our Privacy Policy</span></p>
                                                               <p style="font-size: 14px; line-height: 200%;"><span
                                                                       style="font-family: Lato, sans-serif; font-size: 16px; line-height: 32px;">Want
                                                                       to change how you receive these emails? </span>
                                                               </p>
                                                               <p style="font-size: 14px; line-height: 200%;"><span
                                                                       style="font-family: Lato, sans-serif; font-size: 16px; line-height: 32px;">You
                                                                       can update your preferences or <span
                                                                           style="text-decoration: underline; font-size: 16px; line-height: 32px;">unsubscribe</span>
                                                                       from this list.</span>
                                                               </p>
                                                           </div>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <!--[if (!mso)&(!IE)]><!-->
                                       </div>
                                       <!--<![endif]-->
                                   </div>
                               </div>
                               <!--[if (mso)|(IE)]></td><![endif]-->
                               <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                           </div>
                       </div>
                   </div>



                   <div class="u-row-container" style="padding: 0px;background-color: transparent">
                       <div class="u-row"
                           style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f7d845;">
                           <div
                               style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                               <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #f7d845;"><![endif]-->

                               <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                               <div class="u-col u-col-100"
                                   style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                   <div
                                       style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                       <!--[if (!mso)&(!IE)]><!-->
                                       <div
                                           style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                           <!--<![endif]-->

                                           <table style="font-family:arial,helvetica,sans-serif;" role="presentation"
                                               cellpadding="0" cellspacing="0" width="100%" border="0">
                                               <tbody>
                                                   <tr>
                                                       <td class="v-container-padding-padding"
                                                           style="overflow-wrap:break-word;word-break:break-word;padding:13px 10px;font-family:arial,helvetica,sans-serif;"
                                                           align="left">

                                                           <div
                                                               style="color: #000000; line-height: 140%; text-align: center; word-wrap: break-word;">
                                                               <p style="font-size: 14px; line-height: 140%;"><span
                                                                       style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">&copy;
                                                                       2022 Feoux. All Rights Reserved.</span></p>
                                                           </div>

                                                       </td>
                                                   </tr>
                                               </tbody>
                                           </table>

                                           <!--[if (!mso)&(!IE)]><!-->
                                       </div>
                                       <!--<![endif]-->
                                   </div>
                               </div>
                               <!--[if (mso)|(IE)]></td><![endif]-->
                               <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                           </div>
                       </div>
                   </div><!--[if (mso)|(IE)]></td></tr></table><![endif]-->
               </td>
           </tr>
       </tbody>
   </table>
   <!--[if mso]></div><![endif]-->
   <!--[if IE]></div><![endif]-->
</body>
</html>
   ';
                          // The content-type header must be set when sending HTML email
                          $headers = "MIME-Version: 1.0" . "\r\n";
                          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                          $headers = "From:" . $from;
                          if (mail($to, $subject, $message, $headers)) {
                              echo "Message was sent.";
                          } else {
                              echo "Message was not sent.";
                          }
                    }
                }
            }
        }
            ?>
<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="font-awesome/css/all.css">
    <title>Lost Password &#8211; Feoux</title>   <link rel="icon" href="https://www.feoux.com/favicon.ico" type="image/x-icon"><link rel="icon" href="https://www.feoux.com/favicon.png" type="image/x-icon">
<meta name="description" content="Feoux is article sharing platform where anyone can read and publish articles all around globe.">
<meta name="keywords" content="article, articles, sharing, article sharing, knowledge, ideas, thinking, music, earn, earning, money">
<meta name="author" content="Feoux">
<link rel="stylesheet" href="https://www.feoux.com/font-awesome/css/all.css"><link rel="stylesheet" href="https://www.feoux.com/bootstrap/font/bootstrap-icons.css">

<noscript><style>#backto-top{display:none;}</style></noscript><link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='stylesheet' id='sb_instagram_styles-css'  href='../../assets/content/plugins/instagram-feed/css/sbi-styles.min.css?ver=2.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='../../assets/includes/css/dist/block-library/style.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href='../../assets/includes/css/dist/block-library/theme.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-vendors-style-css'  href='../../assets/content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style.css?ver=5.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='../../assets/content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=5.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../../assets/content/plugins/contact-form-7/includes/css/styles.css?ver=5.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css'  href='../../assets/content/plugins/woocommerce/assets/css/select2.css?ver=5.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='../../assets/content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=5.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../../assets/content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=5.5.2' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='../../assets/content/plugins/woocommerce/assets/css/woocommerce.css?ver=5.5.2' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='axil-fonts-css'  href='https://fonts.googleapis.com/css?family=Red+Hat+Display%3A0%2C400%3B0%2C500%3B0%2C700%3B0%2C900%3B1%2C400%3B1%2C500%3B1%2C700%3B1%2C900&#038;subset=latin%2Clatin-ext&#038;ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='slick-css'  href='../../assets/content/themes/blogar/assets/css/vendor/slick.css?ver=1.1.3' type='text/css' media='all' />
<link rel='stylesheet' id='slick-theme-css'  href='../../assets/content/themes/blogar/assets/css/vendor/slick-theme.css?ver=1.1.3' type='text/css' media='all' />

<link rel='stylesheet' id='bootstrap-css'  href='../../assets/content/themes/blogar/assets/css/vendor/bootstrap.min.css?ver=1.1.3' type='text/css' media='all' />
<link rel='stylesheet' id='axil-style-css'  href='../../assets/content/themes/blogar/assets/css/style.css?ver=1.1.3' type='text/css' media='all' />
<link rel='stylesheet' id='axil-woocommerce-css'  href='../../assets/content/themes/blogar/assets/css/woocommerce.css?ver=1.1.3' type='text/css' media='all' />
<link rel='stylesheet' id='blogar-style-css'  href='../../assets/content/themes/blogar/style.css?ver=5.7.2' type='text/css' media='all' />
<script type='text/javascript' src='../../assets/includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
<script type='text/javascript' src='../../assets/includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>

<script type='text/javascript' src='../../assets/includes/js/zxcvbn-async.min.js?ver=1.0' id='zxcvbn-async-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/slick.min.js?ver=1.1.3' id='slick-js'></script>
<link rel="https://api.w.org/" href="../../wp-json/" /><link rel="alternate" type="application/json" href="../../wp-json/wp/v2/pages/795" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../assets/includes/wlwmanifest.xml" /> 

<link rel="canonical" href="../../my-account/" />
<link rel='shortlink' href='../../?p=795' />
<link rel="alternate" type="application/json+oembed" href="../../wp-json/oembed/1.0/embed?url=http%3A%2F%2Faxilthemes.com%2Fthemes%2Fblogar%2Fmy-account%2F" />
<link rel="alternate" type="text/xml+oembed" href="../../wp-json/oembed/1.0/embed?url=http%3A%2F%2Faxilthemes.com%2Fthemes%2Fblogar%2Fmy-account%2F&#038;format=xml" />
<meta name="framework" content="Redux 4.1.29" />
<style type="text/css" media="all">

</style>
        <!--Customizer CSS-->
        <style type="text/css">

                                                                                                                                                                                                                                                                                                                                                
        </style>
        	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	
		<style type="text/css" id="wp-custom-css">
			.mainmenu-nav ul.mainmenu > li.megamenu-wrapper .megamenu-sub-menu {
    max-width: 1230px;
}
.header-bottom .col-xl-8.col-lg-4.col-md-6.col-sm-4.col-7 {
    position: static;
}
.axil-header .axil-mainmenu-withbar {
    position: static;
}
.axil-header.header-style-3 .col-md-6.col-sm-3.col-4.col-xl-8 {
    position: static;
}

.post-grid-one-update .axil-video-post-area.axil-section-gap {
    padding: 30px 0;
}

.post-grid-one-update  .content-block.post-default .post-content {
    margin-top: 20px;
}
		</style>
		</head>

<body class="page-template-default page page-id-795 wp-embed-responsive theme-blogar woocommerce-account woocommerce-page woocommerce-lost-password woocommerce-no-js page-my-account active-scroll-to-top  header-with-search elementor-default elementor-kit-12">
<div class="main-content">
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light">
<span title="Light Mode"><i class="fas fa-sun"></i></span>
</a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
<span title="Dark Mode"><i class="fas fa-moon"></i></span>
</a>
            </li>
        </ul></div>
                <div class="main-content">
<!-- Start Header -->
<header class="header axil-header header-style-1 header-light header-with-shadow   ">
                    <div class="header-wrap">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                                <div class="logo">
                                    <a href="../../" title="feoux" rel="home">


                                        <img class="dark-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">
                                        <img class="light-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">


                                    </a>

                                </div>
                                <!-- End Logo-->
                            </div>

                            <div class="axil-mainmenu-withbar col-md-3 col-sm-3 col-3 col-xl-6">
                                <div class="mainmenu-wrapper d-none d-xl-block">
                                    <!-- Start Mainmanu Nav -->
                                    <nav class="mainmenu-nav d-none d-lg-block">
                                        <ul id="main-menu" class="mainmenu">
                                            <li id="menu-item-437" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page has-dropdown"><a href="../../">Home</a>
                                            </li>
                                            <li id="menu-item-280" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../ask-now/">Ask Feoux</a>
                                            </li>
                                            <li id="menu-item-280" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../extra/Help/">Help</a>
                                            </li>
                                            <li id="menu-item-675" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../extra/about-us/">About Us</a></li>
                                            <li id="menu-item-380" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../extra/contact-us/">Contact Us</a>
                                            </li>

                                        </ul>
                                    </nav>
                                    <!-- End Mainmanu Nav -->
                                </div>
                                <!-- Start Hamburger Menu  -->
                                <div class="hamburger-menu d-block d-xl-none text-right">
                                    <div class="hamburger-inner">
                                        <div class="icon"><i class="fas fa-bars"></i></div>
                                    </div>
                                </div>
                                <!-- End Hamburger Menu  -->
                            </div>


                            <div class="d-none d-sm-block col-lg-3 col-md-3 col-sm-3 col-3">
                                <div class="header-search text-right d-flex align-items-center justify-content-end">

                                    <form id="header-search-1" action="../../search/" method="GET" class="blog-search">
                                        <div class="axil-search form-group">
                                             <button type="submit" name="search" class="search-button"><i class="fas fa-search"></i></button>
            <input type="text" name="input" title="Type to search Anything" class="form-control" placeholder="Search ..." autocomplete="off" value="" />
           
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="mobile-search-wrapper d-block d-sm-none col-lg-3 col-md-3 col-sm-3 col-3">
                                <div class="header-search text-right d-flex align-items-center justify-content-end">
                                    <div class="search-mobile-icon">
                                        <button><i class="fas fa-search"></i></button>
                                    </div>
                                    <form id="header-search-1" action="../../search/" method="GET" class="blog-search large-mobile-blog-search">
                                        <div class="axil-search-mobile form-group">
                                             <button type="submit" name="search" class="search-button"><i class="fas fa-search"></i></button>
            <input type="text" name="input" title="Type to search Anything" class="form-control" placeholder="Search ..." autocomplete="off" value="" />
           
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </header>
                <!-- Start Header -->
                <!-- Start Mobile Menu Area  -->
                <div class="popup-mobilemenu-area">
                    <div class="inner">
                        <div class="mobile-menu-top">
                            <div class="logo">
                                <a href="../" title="feoux" rel="home">



                                    <img class="dark-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">

                                    <img class="light-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">


                                </a>
                            </div>
                            <div class="mobile-close">
                                <div class="icon">
                                    <i class="fas fa-times"></i>
                                </div>
                            </div>
                        </div>
                        <nav class="menu-item">
                            <ul id="mobile-menu" class="mainmenu-item">
                                <li id="menu-item-437" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page has-dropdown"><a href="../">Home</a>
                                </li>
                                <li id="menu-item-280" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../ask-now/">Ask Feoux</a>
                                </li>
                                <li id="menu-item-280" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../extra/Help/">Help</a>
                                </li>
                                <li id="menu-item-675" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../../extra/about-us/">About Us</a></li>
                                <li id="menu-item-380" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-675 megamenu-wrapper axil-post-type-page"><a href="../extra/contact-us/">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Mobile Menu Area  -->
                <!-- Start Breadcrumb Area  -->
<div class="axil-breadcrumb-area breadcrumb-style-1 bg-color-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner">
                    <ul id="breadcrumbs" class="axil-breadcrumb liststyle d-flex"><li class="item-home"><a class="bread-link bread-home" href="../../" title="Home">Home</a></li><li class="separator separator-home">  </li><li class="item-current item-795"><span class="bread-current bread-795"> My account</span></li></ul>                                            <h1 class="page-title">Reset Password</h1>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area  --><!-- Start Page Wrapper -->
<div class="main-wrapper">


<div class="axil-section-gap bg-color-white">
	<div class="container">

		<article id="post-795" class="post-795 page type-page status-publish hentry">
	<div class="entry-content">
		<div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
<form method="post" class="woocommerce-ResetPassword lost_reset_password">

	<p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="user_login">Username or email</label>
		<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" autocomplete="username" />
	</p>

	<div class="clear"></div>

	
	<p class="woocommerce-form-row form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<button type="submit" name="reset" class="woocommerce-Button button" value="Reset password">Reset password</button>
	</p>

	<input type="hidden" id="woocommerce-lost-password-nonce" name="woocommerce-lost-password-nonce" value="b6856ec3cb" /><input type="hidden" name="_wp_http_referer" value="/themes/blogar/my-account/lost-password/" />
</form>
</div>
	</div>
</article>
	</div>
</div>

<!--WPFC_FOOTER_START-->
</div>
<!-- End Page Wrapper -->

</div>
<!-- End main-content -->


<!-- Start Footer Area  -->
<div class="axil-footer-area axil-default-footer axil-footer-var-1 footer-menu-active">
            
    <!-- Start Footer Top Area  -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo mb_sm--10">
                                                    <a href="../../"
                               title="feoux" rel="home">

                                
                                                                            <img class="dark-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">
                                                                                                                <img class="light-logo" src="../../assets/content/themes/blogar/assets/images/logo/logo.png" alt="feoux">
                                    
                                
                            </a>
                        
                    </div> <!-- End Logo-->
                </div>
                <!-- Start Social Icon -->
                                    <!-- Start Post List  -->
                    <div class="col-lg-8 col-md-8">
                        <div class="d-flex justify-content-start mt_sm--15 justify-content-md-end align-items-center flex-wrap">
                                                            <h5 class="follow-title mb--0 mr--20">Follow us</h5>
                            
                            <ul class="social-icon color-tertiary md-size justify-content-start">
                                <li><a class="facebook-f social-icon" href="https://www.facebook.com/feoux04" title="Facebook-f" target="_blank"><i class="fab fa-facebook-f"></i></a></li><li><a class="twitter social-icon" href="https://twitter.com/feoux1" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li><li><a class="linkedin-in social-icon" href="https://linkedin.com/" title="Linkedin-in" target="_blank"><i class="fab fa-linkedin-in"></i></a></li><li><a class="instagram social-icon" href="https://instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>                            </ul>
                        </div>
                    </div>
                    <!-- End Footer Top Area  -->
                                <!-- End Social Icon -->
            </div>
        </div>
    </div>
    <!-- End Footer Top Area  -->

    <!-- Start Copyright Area  -->
    <div class="copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="copyright-left">
                                                    <ul id="menu-footer-bottom-menu" class="mainmenu justify-content-start"><li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7"><a href="../../extra/contact-us/">Contact Us</a></li>
<li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a href="../../extra/terms-of-use/">Terms of Use</a></li>
<li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="../../ads/">Advertise with Us</a></li>
<li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="../../extra/Help/">Help</a></li>
</ul>                                            </div>
                </div>
                                    <div class="col-lg-4 mt_md--20 mt_sm--20">
                        <div class="copyright-right text-left text-lg-right">
                            <p>© <?php echo date("Y");?>. All rights reserved by <a href="https://feoux.com" target="_blank" rel="noopener">feoux.</a></p>
                        </div>
                    </div>
                            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</div>
<!-- End Footer Area  -->


        <!-- Start Back To Top  -->
        <a id="backto-top">
        <center><i class="fas fa-angle-up" style="color: white;margin-top: 30%;"></i></center></a>
        <!-- End Back To Top  -->
    <!-- Instagram Feed JS -->
	<link rel='stylesheet' id='elementor-icons-css'  href='../../assets/content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.12.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css'  href='../../assets/content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='../../assets/content/plugins/elementor/assets/css/frontend.min.css?ver=3.3.1' type='text/css' media='all' />
<style id='elementor-frontend-inline-css' type='text/css'>
@font-face{font-family:eicons;src:url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);src:url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"),url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"),url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"),url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"),url(../../assets/content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");font-weight:400;font-style:normal}
</style>
<link rel='stylesheet' id='elementor-post-12-css'  href='../../assets/content/uploads/elementor/css/post-12.css?ver=1627040536' type='text/css' media='all' />
<link rel='stylesheet' id='e-animations-css'  href='../../assets/content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.7.2' type='text/css' media='all' />
<script type='text/javascript' src='../../assets/content/plugins/blogar-core/assets/js/element-scripts.js?ver=1.0' id='blogar-element-scripts-js'></script>
<script type='text/javascript' src='../../assets/includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' id='wp-polyfill-js'></script>

<script type='text/javascript' src='../../assets/content/plugins/contact-form-7/includes/js/index.js?ver=5.4.2' id='contact-form-7-js'></script>
<script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70' id='jquery-blockui-js'></script>

<script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=5.5.2' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.9' id='selectWoo-js'></script>
<script type='text/javascript' src='../../assets/includes/js/dist/hooks.min.js?ver=50e23bed88bcb9e6e14023e9961698c1' id='wp-hooks-js'></script>
<script type='text/javascript' src='../../assets/includes/js/dist/i18n.min.js?ver=db9a9a37da262883343e941c3731bc67' id='wp-i18n-js'></script>


<script type='text/javascript' src='../../wp-admin/js/password-strength-meter.min.js?ver=5.7.2' id='password-strength-meter-js'></script>

<script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=5.5.2' id='wc-password-strength-meter-js'></script>
<script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4' id='js-cookie-js'></script>

<script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=5.5.2' id='woocommerce-js'></script>
<script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/frontend/lost-password.min.js?ver=5.5.2' id='wc-lost-password-js'></script>

<script type='text/javascript' src='../../assets/content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=5.5.2' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/modernizr.min.js?ver=1.1.3' id='modernizr-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/popper.js?ver=1.1.3' id='popper-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/tweenmax.min.js?ver=1.1.3' id='tweenmax-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/gsap.js?ver=1.1.3' id='gsap-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/commands.js?ver=1.1.3' id='axil-copylink-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/js.cookie.js?ver=1.1.3' id='axil-cookie-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/bootstrap.min.js?ver=1.1.3' id='bootstrap-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/main.js?ver=1.1.3' id='axil-main-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/js/vendor/jquery.style.switcher.js?ver=1.1.3' id='jquery-style-switcher-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/admin/js/navigation.js?ver=1.1.3' id='blogar-navigation-js'></script>
<script type='text/javascript' src='../../assets/content/themes/blogar/assets/admin/js/skip-link-focus-fix.js?ver=1.1.3' id='blogar-skip-link-focus-fix-js'></script>
<script type='text/javascript' src='../../assets/includes/js/wp-embed.min.js?ver=5.7.2' id='wp-embed-js'></script>

<script type='text/javascript' src='../../assets/content/plugins/instagram-feed/js/sbi-scripts.min.js?ver=2.9.2' id='sb_instagram_scripts-js'></script>
<script type='text/javascript' src='../../assets/content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.3.1' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='../../assets/content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.3.1' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='../../assets/content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='../../assets/includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='../../assets/content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='../../assets/content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.3.1' id='share-link-js'></script>
<script type='text/javascript' src='../../assets/content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"direction":"max","is_enabled":true,"default_value":767},"mobile_extra":{"label":"Mobile Extra","value":880,"direction":"max","is_enabled":false,"default_value":880},"tablet":{"label":"Tablet","value":1024,"direction":"max","is_enabled":true,"default_value":1024},"tablet_extra":{"label":"Tablet Extra","value":1365,"direction":"max","is_enabled":false,"default_value":1365},"laptop":{"label":"Laptop","value":1620,"direction":"max","is_enabled":false,"default_value":1620},"widescreen":{"label":"Widescreen","value":2400,"direction":"min","is_enabled":false,"default_value":2400}}},"version":"3.3.1","is_static":false,"experimentalFeatures":{"e_import_export":true,"landing-pages":true,"elements-color-picker":true,"admin-top-bar":true},"urls":{"assets":"http:\/\/axilthemes.com\/themes\/blogar\/assets/content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":795,"title":"My%20account%20%E2%80%93%20Blogar","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='../../assets/content/plugins/elementor/assets/js/frontend.min.js?ver=3.3.1' id='elementor-frontend-js'></script>
<script type='text/javascript' src='../../assets/content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.3.1' id='preloaded-modules-js'></script>
</body>
</html>

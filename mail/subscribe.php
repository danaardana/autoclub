<?php 
$to = $_SESSION['email']; 
$id = $_SESSION['userId'];
$from = 'rioardanaputra98@gmail.com'; 
$fromName = 'AUTOCLUB'; 
 
$subject = "Welcome as our family"; 
 
$htmlContent = ' 
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
            <meta content="telephone=no" name="format-detection">
            <meta content="width=mobile-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" name="viewport">
            <meta content="IE=9; IE=8; IE=7; IE=EDGE;" http-equiv="X-UA-Compatible">
            <title>Welcome Email</title>
            <style type="text/css">
            /**This is to overwrite Outlook.com’s Embedded CSS************/
            table {border-collapse:separate;}
            a, a:link, a:visited {text-decoration: none; color: #00788a}
            h2,h2 a,h2 a:visited,h3,h3 a,h3 a:visited,h4,h5,h6,.t_cht {color:#000 !important}
            p {margin-bottom: 0}
            .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td {line-height: 100%}
            /**This is to center your email in Outlook.com************/
            .ExternalClass {width: 100%;}
            /* General Resets */
            #outlook a {padding:0;}
            body, #body-table {height:100% !important; width:100% !important; margin:0 auto; padding:0; line-height:100%; !important}
            img, a img {border:0; outline:none; text-decoration:none;}
            .image-fix {display:block;}
            table, td {border-collapse:collapse;}
            /* Client Specific Resets */
            .ReadMsgBody {width:100%;} .ExternalClass{width:100%;}
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100% !important;}
            .ExternalClass * {line-height: 100% !important;}
            table, td {mso-table-lspace:0pt; mso-table-rspace:0pt;}
            img {outline: none; border: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
            body, table, td, p, a, li, blockquote {-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
            body.outlook img {width: auto !important;max-width: none !important;}
            /* Start Template Styles */
            /* Main */
            body{ -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
            body, #body-table {background-color: #000000 margin:0 auto !important;; margin:0 auto !important; text-align:center !important;}
            p {padding:0; margin: 0; line-height: 24px; font-family: Open Sans, sans-serif;}
            a, a:link {color: #1c344d;text-decoration: none !important;}
            .footer-link a, .nav-link a {color: #fff6e5;}
            /* Yahoo Mail */
            .thread-item.expanded .thread-body{background-color: #000000 !important;}
            .thread-item.expanded .thread-body .body, .msg-body{display:block !important;}
            #body-table .undoreset table {display: table !important;table-layout: fixed !important;}
            /* Start Media Queries */
            @media only screen and (max-width: 640px) {
                    a[href^="tel"], a[href^="sms"] {text-decoration: none;pointer-events: none; cursor: default;}
                        .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration: default; pointer-events: auto;cursor: default;}
                *[class].full-width {width: 100%!important;}
                *[class].mobile-width {width: 440px !important; padding: 0 4px;}
                *[class].content-width {width: 360px!important;}
                *[class].content-width-menu {width: 360px!important;}
                *[class].center {text-align:center !important; height:auto !important;}
                *[class].center-stack {padding-bottom:30px !important; text-align:center !important; height:auto !important;}
                *[class].stack {padding-bottom:30px !important; height: auto !important;}
                *[class].gallery {padding-bottom: 20px!important;}
                *[class].fluid-img {height:auto !important; max-width:600px !important; width: 100% !important;}
                *[class].block {display: block!important;}
                *[class].midaling { width:100% !important; border:none !important; }
            }
            @media only screen and (max-width: 480px) {
                *[class].full-width {width: 100%!important;}
                *[class].mobile-width {width: 320px!important; padding: 0 4px;}
                *[class].content-width {width: 240px!important;}
                *[class].content-width-menu {width: 320px!important;}
                *[class].navlink {font-size:13px !important;}
                *[class].center {text-align:center !important; height:auto !important;}
                *[class].center-stack {padding-bottom:30px !important; text-align:center !important; height:auto !important;}
                *[class].stack {padding-bottom:30px !important; height: auto !important;}
                *[class].gallery {padding-bottom: 20px!important;}
                *[class].fluid-img {height:auto !important; max-width:600px !important; width: 100% !important; min-width:320px !important;}
                *[class].midaling { width:100% !important; border:none !important; }
                *[class].navlink{ width:600px !important; border:none !important; }
            }
            @media only screen and (max-width: 320px) {
                *[class].full-width {width: 100%!important;}
                *[class].mobile-width {width: 100%!important; padding: 0 4px;}
                *[class].content-width {width: 240px!important;}
                *[class].center {text-align:center !important; height:auto !important;}
                *[class].center-stack {padding-bottom:30px !important; text-align:center !important; height:auto !important;}
                *[class].stack {padding-bottom:30px !important; height: auto !important;}
                *[class].gallery {padding-bottom: 20px!important;}
                *[class].fluid-img {height:auto !important; max-width:600px !important; width: 100% !important; min-width:320px !important;}
                *[class].midaling { width:100% !important; border:none !important;}
            }
            </style>
        </head>
        <body bgcolor="#000000" style="background:#000;">
            <!-- Start of banner -->
            <table id="body-table" align="center" width="100%" bgcolor="#e6e5e7" cellspacing="0" cellpadding="0" border="0" style="table-layout:fixed;">
                <tbody>
                    <tr>
                        <td valign="top" align="center">
                            <table width="600" bgcolor="#ffffff" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
                                <tbody>
                                    <tr>
                                        <td valign="top" bgcolor="#ffffff" align="center">
                                            
                                            <!-- Start Space -->
                                            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width">
                                                <tbody>
                                                    <tr>
                                                        <td height="26">&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- End Space -->
                                            
                                            <!-- Section 1 Starts / Logo & Menu -->
                                            <table width="550" align="center" cellspacing="0" cellpadding="0" border="0" class="content-width-menu">
                                                <tbody>
                                                    <tr>
                                                        <td height="25" valign="middle">
                                                            
                                                            <!-- Start Logo -->
                                                            <table width="211" align="left" cellspacing="0" cellpadding="0" border="0" class="full-width">
                                                                <tbody>
                                                                    <tr>
                                                                        <td height="30" valign="middle" align="left" class="center-stack"  style="font-family: Open Sans, sans-serif;font-size: 18px;font-weight:bold;" ><a href="autoclub-impel.000webhostapp.com"><span style="color: #FF6600;font-size:24px;font-weight:bold;">AUTO</span>CLUB</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- End Logo -->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- Section 1 Ends / Logo & Menu -->
                                            
                                            <!-- Start Space -->
                                            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width">
                                                <tbody>
                                                    <tr>
                                                        <td height="25">&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- End Space -->
                                            
                                            <!-- After Menu Start -->
                                            <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
                                                <tbody>
                                                    <tr>
                                                        <td align="center">
                                                            
                                                            <!-- Start Block Content -->
                                                            <table bgcolor="#666666" width="100%" cellspacing="0" cellpadding="0" border="0" background="img/banner2.jpg" style="background-repeat: no-repeat; !important; background-position: center center;background-size: cover;" class="full-width">
                                                                <tbody>
                                                                    <tr>
                                                                        <td height="67" class="front">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="front" style="font-family: Open Sans, sans-serif; font-size: 48px; mso-line-height-rule:exactly; line-height:48px; font-weight:normal; color: #ffffff;" align="center">WELCOME TO</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="front" style="font-family: Open Sans, sans-serif; font-size: 60px;mso-line-height-rule:exactly; line-height:60px; font-weight: bold; color: #ffffff;" align="center"> OUR FAMILY</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="front" height="60" align="center"><img src="img/star.png" width="131" height="14" alt=""/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="front" style="font-family: Open Sans, sans-serif; font-size: 18px; mso-line-height-rule:exactly; line-height:18px; font-weight: bold; color: #ffffff;" align="center">BUY SELL RENT A CAR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="front" height="67">&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- End Block Content -->
                                                            
                                                            <!-- Section 3 Start -->
                                                            <table class="mobile-width" width="550" bgcolor="#ffffff" align="center" cellspacing="0" cellpadding="0" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center">
                                                                            
                                                                            <!-- Start Space -->
                                                                            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width" >
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td height="40">&nbsp;</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <!-- End Space -->
                                                                            
                                                                            <!-- Column 1 Start -->
                                                                            <table width="171" border="0" align="left" cellpadding="0" cellspacing="0" class="midaling">
                                                                                <tr align="center">
                                                                                    <td style="font-size:15px;mso-line-height-rule:exactly;  line-height:50px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;">BUY A NEW CAR</td>
                                                                                </tr>
                                                                                <tr align="center">
                                                                                    <td style="font-size:13px; mso-line-height-rule:exactly; line-height:16px; color:#95a5a6; font-weight:normal; font-family: Open Sans, sans-serif;">Cum sociis natoque<br /> penatibus et magnis<br /> dis parturient tes,<br /> ridiculus ridic sermus.</td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- Column 1 End -->
                                                                            
                                                                            <!-- Column 2 Start -->
                                                                            <table width="203" border="0" cellpadding="0" cellspacing="0" align="left" style="border-right:#e5eaeb solid 1px; border-left: #e5eaeb solid 1px;" class="midaling">
                                                                                <tr align="center">
                                                                                    <td style="font-size:15px; mso-line-height-rule:exactly; line-height:50px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;">BUY A SENCOND CAR</td>
                                                                                </tr>
                                                                                <tr align="center">
                                                                                    <td style="font-size:13px; line-height:16px; color:#95a5a6; font-weight:normal; font-family: Open Sans, sans-serif;">Cum sociis natoque<br /> penatibus et magnis<br /> dis parturient tes,<br /> ridiculus ridic sermus.</td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- Column 2 End -->
                                                                            
                                                                            <!-- Column 3 Start -->
                                                                            <table width="171" border="0" cellpadding="0" cellspacing="0" align="left" class="midaling">
                                                                                <tr align="center">
                                                                                    <td style="font-size:15px; mso-line-height-rule:exactly;line-height:50px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;">RENT A CAR</td>
                                                                                </tr>
                                                                                <tr align="center">
                                                                                    <td style="font-size:13px; line-height:16px; color:#95a5a6; font-weight:normal; font-family: Open Sans, sans-serif;">Cum sociis natoque<br /> penatibus et magnis<br /> dis parturient tes,<br /> ridiculus ridic sermus.</td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- Column 3 End -->
                                                                            
                                                                            <!-- Start Space -->
                                                                            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width" >
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td height="52">&nbsp;</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <!-- End Space -->
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- Section 3 End -->
                                                            
                                                            <!-- Start Section 5 -->
                                                            <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center">
                                                                            
                                                                            <!-- Start Space -->
                                                                            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width" >
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td height="52">&nbsp;</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <!-- End Space -->
                                                                            
                                                                            <!-- Start Block Content -->
                                                                            <table width="550" align="center" cellspacing="0" cellpadding="0" border="0" class="content-width">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center">
                                                                                            
                                                                                            <!-- Start Column 1 -->
                                                                                            <table width="253" align="left" cellspacing="0" cellpadding="0" border="0" class="full-width">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td align="left"><img src="img/temp_img1.jpg" alt="" width="253" height="198" border="0" class="content-width" style="display:block" /></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td height="35">&nbsp;</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td align="left" style="font-size:15px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;">Nissan Maxima 2017</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td height="26" align="left"><img src="img/green_line.jpg" width="30" height="2" alt="" /></td>
                                                                                                    </tr>
                                                                                                    <tr >
                                                                                                        <td style="font-size:13px;  mso-line-height-rule:exactly; line-height:16px; color:#95a5a6; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">5 Passanger car, Sed varius tortor urna, ullamcorper pellentesque massa tristique et. Nunc elit </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td class="center-stack"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            <!-- End Column 1 -->
                                                                                            
                                                                                            <!-- Start Space -->
                                                                                            <table align="left" cellspacing="0" width="35" height="24" cellpadding="0" border="0" class="full-width">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td height="25" style="font-size: 0;border-collapse: collapse;">                                                                    <p style="padding-left: 42px;"> </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <!-- End Space -->
                                                                                        
                                                                                        <!-- Start Column 2 -->
                                                                                        <table width="253" align="left" cellspacing="0" cellpadding="0" border="0" class="full-width">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"><img src="img/temp_img2.jpg" alt="" width="253" height="198" border="0" class="content-width" style="display:block"/></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style=" mso-line-height-rule:exactly; line-height:35px;" height="35">&nbsp;</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="left" style="font-size:15px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;">BMW 320i 2018</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="26" align="left"><img src="img/green_line.jpg" width="30" height="2" alt="" /></td>
                                                                                                </tr>
                                                                                                <tr >
                                                                                                    <td style="font-size:13px;mso-line-height-rule:exactly; line-height:16px; color:#95a5a6; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">Second car with body type as sedan<br /></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="center-stack"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <!-- End Column 2 -->
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- End Section 5 -->
                                                        
                                                        <!-- Start Space -->
                                                        <table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width" >
                                                            <tbody>
                                                                <tr>
                                                                    <td height="52">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- End Space -->
                                                        
                                                        <!-- Start Section 6 -->
                                                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
                                                            <tbody>
                                                                <tr>
                                                                    <td align="center">
                                                                        
                                                                        <!-- Start Block Content -->
                                                                        <table width="550" align="center" cellspacing="0" cellpadding="0" border="0" class="content-width">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center">
                                                                                        
                                                                                        <!-- Start Column 1 -->
                                                                                        <table width="253" align="left" cellspacing="0" cellpadding="0" border="0" class="full-width">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"><img src="img/temp_img3.jpg" alt="" width="253" height="195" border="0" class="content-width" /></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="mso-line-height-rule:exactly; line-height:35px;" height="35">&nbsp;</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="left" style="font-size:15px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;">Toyota Fortuner 2014</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td height="26" align="left"><img src="img/green_line.jpg" width="30" height="2" alt="" /></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td align="left" style="font-size:13px; mso-line-height-rule:exactly; line-height:16px; color:#95a5a6; font-weight:normal; font-family: Open Sans, sans-serif;">Like a brand new car, all documentation is completed. </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="center-stack"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <!-- End Column 1 -->
                                                                                        
                                                                                        <!-- Start Space -->
                                                                                        <table align="left" cellspacing="0" width="35" height="24" cellpadding="0" border="0" class="full-width">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td height="25" style="font-size: 0;mso-line-height-rule:exactly; line-height: 0;border-collapse: collapse;"><p style="padding-left: 42px;"> </p>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <!-- End Space -->
                                                                                    
                                                                                    <!-- Start Column 2 -->
                                                                                    <table width="253" align="left" cellspacing="0" cellpadding="0" border="0" class="full-width">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td align="left"><img src="img/temp_img4.jpg" alt="" width="253" height="195" border="0" class="content-width" /></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td style=" mso-line-height-rule:exactly; line-height:35px;" height="35">&nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td align="left" style="font-size:15px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;">Toyota Land Cruiser EXR 2023</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td height="26" align="left"><img src="img/green_line.jpg" width="30" height="2" alt="" /></td>
                                                                                            </tr>
                                                                                            <tr >
                                                                                                <td style="font-size:13px;mso-line-height-rule:exactly;line-height:16px; color:#95a5a6; font-weight:normal; font-family: Open Sans, sans-serif;" align="left">Want to show off? You can rent a new Toyota Land Cruiser EXR 2023 just for Rp 3 Million per day.</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="center-stack"></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <!-- End Column 2 -->
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- End Section 6 -->
                                                    
                                                    <!-- Start Space -->
                                                    <table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width" >
                                                        <tbody>
                                                            <tr>
                                                                <td height="52">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- End Space -->
                                                    
                                                
                                                <!-- Start Section 9 -->
                                                <table width="600" bgcolor="#2980b9" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center">
                                                                <!-- Start Block Content -->
                                                                <table width="550" align="center" cellspacing="0" cellpadding="0" border="0" class="content-width">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td valign="top" td align="center">
                                                                                <!-- Start Column 1 -->
                                                                                <table align="center" cellspacing="0" cellpadding="0" border="0" class="full-width" width="100%">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td height="50">&nbsp;</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td style="font-size:14px; height:20px; color:#ffffff; font-weight:normal; font-family: Open Sans, sans-serif;" align="center">Talk to us today</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td style="font-family: Open Sans, sans-serif; font-size:28px;mso-line-height-rule:exactly; line-height:28px; font-weight:bold; color:#ffffff" align="center">021-8010-281</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="18">&nbsp;</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td style="font-size:12px; font-family: Open Sans, sans-serif; line-height:12px; color:#ffffff; font-weight:bold;" align="center">JL SURAPATI 163, BANDUNG, JAWA BARAT</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="center" height="34" valign="middle">&nbsp;</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                                <!-- End Column 1 -->
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!-- End Block Content -->
                                                                
                                                                <!-- Start Space -->
                                                                <table width="100%" bgcolor="#2c3e50" cellspacing="0" cellpadding="0" border="0" class="full-width" >
                                                                    <tbody>
                                                                        <tr>
                                                                            <td height="28" align="center" style="font-family: Open Sans, sans-serif;font-size:11px; font-weight:normal; color:#7f8c8d">copyright by e-newsletter  |  <a href="autoclub-impel.000webhostapp.com/backend/unsubsribe/code=' . $id
 $htmlContent .= '" style="color:#7f8c8d;">unsubscribe </a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!-- End Space -->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- End Section 9 -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- After Menu End -->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
    </table>
    </body>
    </html>
    <!-- End of banner -->'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers .= 'Cc: Welcome E-Mail' . "\r\n"; 
$headers .= 'Bcc: rioardanaputra98@gmail.com' . "\r\n"; 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ ?>
<script type="text/javascript">
window.location.href = 'https://autoclub-impel.000webhostapp.com/profile.php';
</script>
<?php
}
?>
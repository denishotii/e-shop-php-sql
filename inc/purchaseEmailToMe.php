<?php
    session_start();
    // $emailPassword = "reksa789";
    $email = "ishoponline05@gmail.com";
    include "../db/db.php";
    $uId = $_SESSION['id'];
    $pId = $_SESSION['productId'];
    $sql = "SELECT * FROM orders WHERE uId='$uId' AND productId='$pId'";
    $query = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($query)){
        $orderId = $row['oId'];
        $Name = $row['fullName'];
        $userEmail = $row['email'];
        $address = $row['address'];
        $city = $row['city'];
        $price = $row['productPrice'];
        $date = $row['pDate'];
    }
    $htmlBody = '
    <html>
    
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta name="x-apple-disable-message-reformatting">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="telephone=no" name="format-detection">
        <style>
            #outlook a {
        padding: 0;
    }
    
    .ExternalClass {
        width: 100%;
    }
    
    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 100%;
    }
    
    .es-button {
        mso-style-priority: 100 !important;
        text-decoration: none !important;
    }
    
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    
    .es-desk-hidden {
        display: none;
        float: left;
        overflow: hidden;
        width: 0;
        max-height: 0;
        line-height: 0;
        mso-hide: all;
    }
    
    /*
    END OF IMPORTANT
    */
    s {
        text-decoration: line-through;
    }
    
    html,
    body {
        width: 100%;
        font-family: "open sans", "helvetica neue", helvetica, arial, sans-serif;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }
    
    table {
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        border-collapse: collapse;
        border-spacing: 0px;
    }
    
    table td,
    html,
    body,
    .es-wrapper {
        padding: 0;
        Margin: 0;
    }
    
    .es-content,
    .es-header,
    .es-footer {
        table-layout: fixed !important;
        width: 100%;
    }
    
    img {
        display: block;
        border: 0;
        outline: none;
        text-decoration: none;
        -ms-interpolation-mode: bicubic;
    }
    
    table tr {
        border-collapse: collapse;
    }
    
    p,
    hr {
        Margin: 0;
    }
    
    h1,
    h2,
    h3,
    h4,
    h5 {
        Margin: 0;
        line-height: 120%;
        mso-line-height-rule: exactly;
        font-family: "open sans", "helvetica neue", helvetica, arial, sans-serif;
    }
    
    p,
    ul li,
    ol li,
    a {
        -webkit-text-size-adjust: none;
        -ms-text-size-adjust: none;
        mso-line-height-rule: exactly;
    }
    
    .es-left {
        float: left;
    }
    
    .es-right {
        float: right;
    }
    
    .es-p5 {
        padding: 5px;
    }
    
    .es-p5t {
        padding-top: 5px;
    }
    
    .es-p5b {
        padding-bottom: 5px;
    }
    
    .es-p5l {
        padding-left: 5px;
    }
    
    .es-p5r {
        padding-right: 5px;
    }
    
    .es-p10 {
        padding: 10px;
    }
    
    .es-p10t {
        padding-top: 10px;
    }
    
    .es-p10b {
        padding-bottom: 10px;
    }
    
    .es-p10l {
        padding-left: 10px;
    }
    
    .es-p10r {
        padding-right: 10px;
    }
    
    .es-p15 {
        padding: 15px;
    }
    
    .es-p15t {
        padding-top: 15px;
    }
    
    .es-p15b {
        padding-bottom: 15px;
    }
    
    .es-p15l {
        padding-left: 15px;
    }
    
    .es-p15r {
        padding-right: 15px;
    }
    
    .es-p20 {
        padding: 20px;
    }
    
    .es-p20t {
        padding-top: 20px;
    }
    
    .es-p20b {
        padding-bottom: 20px;
    }
    
    .es-p20l {
        padding-left: 20px;
    }
    
    .es-p20r {
        padding-right: 20px;
    }
    
    .es-p25 {
        padding: 25px;
    }
    
    .es-p25t {
        padding-top: 25px;
    }
    
    .es-p25b {
        padding-bottom: 25px;
    }
    
    .es-p25l {
        padding-left: 25px;
    }
    
    .es-p25r {
        padding-right: 25px;
    }
    
    .es-p30 {
        padding: 30px;
    }
    
    .es-p30t {
        padding-top: 30px;
    }
    
    .es-p30b {
        padding-bottom: 30px;
    }
    
    .es-p30l {
        padding-left: 30px;
    }
    
    .es-p30r {
        padding-right: 30px;
    }
    
    .es-p35 {
        padding: 35px;
    }
    
    .es-p35t {
        padding-top: 35px;
    }
    
    .es-p35b {
        padding-bottom: 35px;
    }
    
    .es-p35l {
        padding-left: 35px;
    }
    
    .es-p35r {
        padding-right: 35px;
    }
    
    .es-p40 {
        padding: 40px;
    }
    
    .es-p40t {
        padding-top: 40px;
    }
    
    .es-p40b {
        padding-bottom: 40px;
    }
    
    .es-p40l {
        padding-left: 40px;
    }
    
    .es-p40r {
        padding-right: 40px;
    }
    
    .es-menu td {
        border: 0;
    }
    
    .es-menu td a img {
        display: inline-block !important;
    }
    
    /* END CONFIG STYLES */
    a {
        font-family: "open sans", "helvetica neue", helvetica, arial, sans-serif;
        font-size: 16px;
        text-decoration: none;
    }
    
    h1 {
        font-size: 36px;
        font-style: normal;
        font-weight: bold;
        color: #333333;
    }
    
    h1 a {
        font-size: 36px;
    }
    
    h2 {
        font-size: 30px;
        font-style: normal;
        font-weight: bold;
        color: #333333;
    }
    
    h2 a {
        font-size: 30px;
    }
    
    h3 {
        font-size: 18px;
        font-style: normal;
        font-weight: normal;
        color: #333333;
    }
    
    h3 a {
        font-size: 18px;
    }
    
    p,
    ul li,
    ol li {
        font-size: 16px;
        font-family: "open sans", "helvetica neue", helvetica, arial, sans-serif;
        line-height: 150%;
    }
    
    ul li,
    ol li {
        Margin-bottom: 15px;
    }
    
    .es-menu td a {
        text-decoration: none;
        display: block;
    }
    
    .es-wrapper {
        width: 100%;
        height: 100%;
        background-image: ;
        background-repeat: repeat;
        background-position: center top;
    }
    
    .es-wrapper-color {
        background-color: #eeeeee;
    }
    
    .es-content-body {
        background-color: #ffffff;
    }
    
    .es-content-body p,
    .es-content-body ul li,
    .es-content-body ol li {
        color: #333333;
    }
    
    .es-content-body a {
        color: #ed8e20;
    }
    
    .es-header {
        background-color: transparent;
        background-image: ;
        background-repeat: repeat;
        background-position: center top;
    }
    
    .es-header-body {
        background-color: #044767;
    }
    
    .es-header-body p,
    .es-header-body ul li,
    .es-header-body ol li {
        color: #ffffff;
        font-size: 14px;
    }
    
    .es-header-body a {
        color: #ffffff;
        font-size: 14px;
    }
    
    .es-footer {
        background-color: transparent;
        background-image: ;
        background-repeat: repeat;
        background-position: center top;
    }
    
    .es-footer-body {
        background-color: #ffffff;
    }
    
    .es-footer-body p,
    .es-footer-body ul li,
    .es-footer-body ol li {
        color: #333333;
        font-size: 14px;
    }
    
    .es-footer-body a {
        color: #333333;
        font-size: 14px;
    }
    
    .es-infoblock,
    .es-infoblock p,
    .es-infoblock ul li,
    .es-infoblock ol li {
        line-height: 120%;
        font-size: 12px;
        color: #cccccc;
    }
    
    .es-infoblock a {
        font-size: 12px;
        color: #cccccc;
    }
    
    .es-button-border {
        border-style: solid solid solid solid;
        border-color: transparent transparent transparent transparent;
        background: #66b3b7;
        border-width: 0px 0px 0px 0px;
        display: inline-block;
        border-radius: 5px;
        width: auto;
    }
    
    a.es-button,
    button.es-button {
        border-style: solid;
        border-color: #66b3b7;
        border-width: 15px 30px 15px 30px;
        display: inline-block;
        background: #66b3b7;
        border-radius: 5px;
        font-size: 18px;
        font-family: "open sans", "helvetica neue", helvetica, arial, sans-serif;
        font-weight: normal;
        font-style: normal;
        line-height: 120%;
        color: #ffffff;
        text-decoration: none;
        width: auto;
        text-align: center;
    }
        </style>
     
    </head>
    
    <body>
        <div class="es-wrapper-color">
            <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td class="esd-email-paddings" valign="top">
                            <table cellpadding="0" cellspacing="0" class="es-content esd-header-popover" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" esd-custom-block-id="7954" align="center">
                                            <table class="es-content-body" style="background-color: transparent;" width="600" cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p15t es-p15b es-p10r es-p10l" align="left">
                                                            <!--[if mso]><table width="580" cellpadding="0" cellspacing="0"><tr><td width="282" valign="top"><![endif]-->
                                                            <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="282" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="es-infoblock esd-block-text es-m-txt-c" align="left">
                                                                                            <p style="font-family: arial, helvetica\ neue, helvetica, sans-serif;"></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td><td width="20"></td><td width="278" valign="top"><![endif]-->
                                                            <table class="es-right" cellspacing="0" cellpadding="0" align="right">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="278" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="right" class="es-infoblock esd-block-text es-m-txt-c">
                                                                                            <p><a href="https://i-shop.netlify.app" class="view" target="_blank" style="font-family: "arial", "helvetica neue", "helvetica", "sans-serif";">View in browser</a></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr></tr>
                                    <tr>
                                        <td class="esd-stripe" esd-custom-block-id="7681" align="center">
                                            <table class="es-header-body" style="background-color: #044767;" width="600" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p35t es-p35b es-p35r es-p35l" align="left">
                                                            <!--[if mso]><table width="530" cellpadding="0" cellspacing="0"><tr><td width="340" valign="top"><![endif]-->
                                                            <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="es-m-p0r es-m-p20b esd-container-frame" width="340" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-m-txt-c" align="left">
                                                                                            <h1 style="color: #ffffff; line-height: 100%;">I-shop</h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td><td width="20"></td><td width="170" valign="top"><![endif]-->
                                                            <table cellspacing="0" cellpadding="0" align="right">
                                                                <tbody>
                                                                    <tr class="es-hidden">
                                                                        <td class="es-m-p20b esd-container-frame" esd-custom-block-id="7704" width="170" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-spacer es-p5b" align="center" style="font-size:0">
                                                                                            <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td style="border-bottom: 1px solid #044767; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <table cellspacing="0" cellpadding="0" align="right">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td align="left">
                                                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td class="esd-block-text" align="right">
                                                                                                                            <p><a target="_blank" style="font-size: 18px; line-height: 120%;" href="https://i-shop.netlify.app">Shop</a></p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                        <td class="esd-block-image es-p10l" valign="top" align="left" style="font-size:0"><a href="https://i-shop.netlify.app" target="_blank"><img src="https://tlr.stripocdn.email/content/guids/CABINET_75694a6fc3c4633b3ee8e3c750851c02/images/77981522050090360.png" alt style="display: block;" width="27"></a></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p40t es-p35r es-p35l" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="530" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-image es-p25t es-p25b es-p35r es-p35l" align="center" style="font-size:0"><a target="_blank" href="https://i-shop.netlify.app"><img src="https://tlr.stripocdn.email/content/guids/CABINET_75694a6fc3c4633b3ee8e3c750851c02/images/67611522142640957.png" alt style="display: block;" width="120"></a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-p10b" align="center">
                                                                                            <h2>Thank You For Your Order!</h2>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-p15t es-p20b" align="left">
                                                                                            <p style="font-size: 16px; color: #777777;">Hi, there is new Order from '.$Name.',<br><b style="color:red;">Please call him to confirm his order!</b><br>Orderer Email: '.$userEmail.' <br></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p20t es-p35r es-p35l" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="530" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-p10t es-p10b es-p10r es-p10l" bgcolor="#eeeeee" align="left">
                                                                                            <table style="width: 500px;" class="cke_show_border" cellspacing="1" cellpadding="1" border="0" align="left">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td width="80%">
                                                                                                            <h4>Order Confirmation #</h4>
                                                                                                        </td>
                                                                                                        <td width="20%">
                                                                                                            <h4>'.$orderId.'</h4>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p35r es-p35l" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="530" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-p10t es-p10b es-p10r es-p10l" align="left">
                                                                                            <table style="width: 500px;" class="cke_show_border" cellspacing="1" cellpadding="1" border="0" align="left">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td style="padding: 5px 10px 5px 0" width="80%" align="left">
                                                                                                            <p>Purchased Item (1)</p>
                                                                                                        </td>
                                                                                                        <td style="padding: 5px 0" width="20%" align="left">
                                                                                                            <p>'.$price.' €</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="padding: 5px 10px 5px 0" width="80%" align="left">
                                                                                                            <p>Shipping + Handling</p>
                                                                                                        </td>
                                                                                                        <td style="padding: 5px 0" width="20%" align="left">
                                                                                                            <p>0.00 €</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="padding: 5px 10px 5px 0" width="80%" align="left">
                                                                                                            <p>Sales Tax</p>
                                                                                                        </td>
                                                                                                        <td style="padding: 5px 0" width="20%" align="left">
                                                                                                            <p>0.00 €</p>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p10t es-p35r es-p35l" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="530" valign="top" align="center">
                                                                            <table style="border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;" width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-p15t es-p15b es-p10r es-p10l" align="left">
                                                                                            <table style="width: 500px;" class="cke_show_border" cellspacing="1" cellpadding="1" border="0" align="left">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td width="80%">
                                                                                                            <h4>TOTAL</h4>
                                                                                                        </td>
                                                                                                        <td width="20%">
                                                                                                            <h4>'.$price.' €</h4>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="esd-structure es-p40t es-p40b es-p35r es-p35l" esd-custom-block-id="7796" align="left">
                                                            <!--[if mso]><table width="530" cellpadding="0" cellspacing="0"><tr><td width="255" valign="top"><![endif]-->
                                                            <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame es-m-p20b" width="255" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-p15b" align="left">
                                                                                            <h4>Delivery Address</h4>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-p10b" align="left">
                                                                                            <p>'.$address.'</p>
                                                                                            <p>'.$city.'</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td><td width="20"></td><td width="255" valign="top"><![endif]-->
                                                            <table class="es-right" cellspacing="0" cellpadding="0" align="right">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="255" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="esd-block-text es-p15b" align="left">
                                                                                            <h4>Estimated Delivery Date<br></h4>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="esd-block-text" align="left">
                                                                                            <p>'.$date.'</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" esd-custom-block-id="7797" align="center">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    
    </html>
    ';
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail ->isSMTP();
    
    $mail ->Host = 'smtp.gmail.com';
    $mail ->Port=587;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'tls';
    
    $mail ->Username = 'ishoponline05.@gmail.com';
    $mail ->Password = 'reksa789';
    $mail ->setFrom('ishoponline05.@gmail.com');
    $mail->FromName = "I-shop | Support Team";
    $mail ->addAddress($email);
    $mail ->addReplyTo('ishoponline05.@gmail.com');
    
    $mail ->isHTML(true);
    $mail ->Subject = 'I-shop | Order Information';
    $mail -> Body = $htmlBody;
    
    if(!$mail->send()){
        echo "Messages Could not be send!";
        echo 'Error: '. $mail->ErrorInfo;
    }
    else{
        session_abort();
        header("Location: ../index.php?succes=order_succes");
}

?>
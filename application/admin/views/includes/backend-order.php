
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <!-- If you delete this meta tag, Half Life 3 will never be released. -->
        <meta name="viewport" content="width=device-width">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <title>KilimanjaroCoffeeCupCompany - Coffee Shop</title>
                <link rel="stylesheet" type="text/css" href="stylesheets/email.css">
                    </head>

                    <body bgcolor="#FFFFFF">
                        <table style="width: 900px;margin:0 auto;">
                            <thead>
                                <tr>
                                <td  width="60%"><h1 class="collapse" style="font-size: 30px;"> Your Order has been successfully placed. </h1></td> 

                                    <td align="left" width="40%">
                                        <a title="KilimanjaroCoffeeCup" class="col-md-3" href="http://KilimanjaroCoffeeCupCompany.com/">
                                            <img src="http://KilimanjaroCoffeeCupCompany.com/image/logo.png" alt="KilimanjaroCoffeeCupCompany"> 
                                        </a>
                                    </td>
                                    
                                </tr>
                            </thead>
                        </table>

                        <table style="width: 900px;margin:0 auto;padding-top:30px;">
                            <thead>
                                <tr>
                                    <td width="60%" style="vertical-align: top"> 
                                        <h3 style="font-weight: 600; margin-bottom: 5px; margin-top: 5px; font-size: 16px;"> Order #: <?php echo $order_details['order_num'] ?></h3> 
                                        <h3 style="font-weight: 600; margin-bottom: 5px; margin-top: 5px; font-size: 16px;"> Date : <?php echo date("d M Y",strtotime($order_details['order_time'])); ?> </h3> 
                                    </td>
                                    <td width="40%" style="vertical-align: top"> 
                                        <h3 style="font-weight: 600; margin-bottom: 5px; margin-top: 5px; font-size: 16px;"> 
                                            KilimanjaroCoffeeCupCompany Ltd.<br>
                                                1947 San Pasqual St,<br>
                                                    Pasadena,CA,<br>
                                                        91107.<br>
                                        </h3> 
                                        <!-- <h3 style="font-weight: 600; margin-bottom: 5px; margin-top: 5px; font-size: 16px;"> 
                                            VAT : 227036527 <br>
                                        </h3>  -->
                                    </td>
                                </tr>
                            </thead>
                        </table>

                              <table style="width: 900px;margin:0 auto;">
                            <tbody>
                                <tr>
                                    <td width="100%" style="text-align: center;padding-top: 35px">
                                    Please click the following link to make the payment using paypal:</br>
                                        <a style="color: rgb(0, 0, 0); text-decoration: none; font-weight: 600; font-size: 16px;" href=<?php echo $paypal_url; ?>>
                                             <b><?php echo $paypal_url; ?></b>
                                        </a>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                 
                                </body></html>
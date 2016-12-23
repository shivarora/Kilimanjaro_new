<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
 * Sandbox / Test Mode
 * -------------------------
 * TRUE means you'll be hitting PayPal's sandbox/test servers.  FALSE means you'll be hitting the live servers.
 */
///$config['Sandbox'] = (MCC_PAYPAL_DEMO_MODE == 'TEST') ? TRUE : FALSE;
$config['Sandbox'] =  FALSE ;

/* 
 * PayPal API Version
 * ------------------
 * The library is currently using PayPal API version 123.0.
 * You may adjust this value here and then pass it into the PayPal object when you create it within your scripts to override if necessary.
 */
$config['APIVersion'] = '123.0';

/*
 * PayPal Gateway API Credentials
 * ------------------------------
 * These are your PayPal API credentials for working with the PayPal gateway directly.
 * These are used any time you're using the parent PayPal class within the library.
 * 
 * We're using shorthand if/else statements here to set both Sandbox and Production values.
 * Your sandbox values go on the left and your live values go on the right.
 * 
 * You may obtain these credentials by logging into the following with your PayPal account.
 * Sandbox: https://www.sandbox.paypal.com/us/cgi-bin/webscr?cmd=_login-api-run
 * Live: https://www.paypal.com/us/cgi-bin/webscr?cmd=_login-api-run
 *
 */
// $config['APIUsername'] = $config['Sandbox'] ? 'shibi.arora_api1.gmail.com' : MCC_PAYPAL_API_USERNAME;
// $config['APIPassword'] = $config['Sandbox'] ? '72TFP55BLMJTFZCL' : MCC_PAYPAL_API_PASSWORD;
// $config['APISignature'] = $config['Sandbox'] ? 'AFcWxV21C7fd0v3bYYYRCpSSRl31Atf02ZuSwtecV3jm9DgWBbenjkZ1' : MCC_PAYPAL_API_SIGNATURE;

$config['APIUsername'] = $config['Sandbox'] ? 'shibi.arora_api1.gmail.com' : 
'kimmit_api1.kilimanjarocoffeecupcompany.com';
$config['APIPassword'] = $config['Sandbox'] ? '72TFP55BLMJTFZCL' : '8QQBQKRYK2DMCMJ6';
$config['APISignature'] = $config['Sandbox'] ? 'AFcWxV21C7fd0v3bYYYRCpSSRl31Atf02ZuSwtecV3jm9DgWBbenjkZ1' : 
'AhbCJEjaXQ3tbaTKu5C5fM2TpDxhAr7QFtHk4kx7iwOktNe2EzVXYvCu';

/*
 * Payflow Gateway API Credentials
 * ------------------------------
 * These are the credentials you use for your PayPal Manager:  http://manager.paypal.com
 * These are used when you're working with the PayFlow child class.
 * 
 * We're using shorthand if/else statements here to set both Sandbox and Production values.
 * Your sandbox values go on the left and your live values go on the right.
 * 
 * You may use the same credentials you use to login to your PayPal Manager, 
 * or you may create API specific credentials from within your PayPal Manager account.
 */
$config['PayFlowUsername'] = $config['Sandbox'] ? 'SANDBOX_USERNAME_GOES_HERE' : 'PRODUCTION_USERNAME_GOGES_HERE';
$config['PayFlowPassword'] = $config['Sandbox'] ? 'SANDBOX_PASSWORD_GOES_HERE' : 'PRODUCTION_PASSWORD_GOES_HERE';
$config['PayFlowVendor'] = $config['Sandbox'] ? 'SANDBOX_VENDOR_GOES_HERE' : 'PRODUCTION_VENDOR_GOES_HERE';
$config['PayFlowPartner'] = $config['Sandbox'] ? 'SANDBOX_PARTNER_GOES_HERE' : 'PRODUCTION_PARTNER_GOES_HERE';

/*
 * PayPal Application ID
 * --------------------------------------
 * The application is only required with Adaptive Payments applications.
 * You obtain your application ID but submitting it for approval within your 
 * developer account at http://developer.paypal.com
 *
 * We're using shorthand if/else statements here to set both Sandbox and Production values.
 * Your sandbox values go on the left and your live values go on the right.
 * The sandbox value included here is a global value provided for developrs to use in the PayPal sandbox.
 */
$config['ApplicationID'] = $config['Sandbox'] ? 'APP-80W284485P519543T' : 
'AeZ-yzsOgVqQLqmqj1XBgQh4-NJnj-Ea7H8uWicKZj302jNc3_aX83MU5ou9SMTVPU7MOW9EtvbH3fie';

/*
 * PayPal Developer Account Email Address
 * This is the email address that you use to sign in to http://developer.paypal.com
 */
$config['DeveloperEmailAccount'] = 'anita.singh2112_api1.gmail.com';

/**
 * Third Party User Values
 * These can be setup here or within each caller directly when setting up the PayPal object.
 */
$config['DeviceID'] = 'DEVICE_ID_GOES_HERE';

/* End of file paypal.php */
/* Location: ./system/application/config/paypal.php */
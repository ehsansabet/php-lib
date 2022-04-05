<?php
require dirname(__FILE__) . '/../vendor/autoload.php';
require_once dirname(__FILE__) . '/configs.php';

use GlobalSmartOTP\Api\OTPHandler;

/* Send OTP by Whatsapp Messenger, Call static */
try {
	$gsOTP = OTPHandler::ByMessenger(API_KEY, MOBILE, TEMPLATE_ID, 'whatsapp');
	echo "ReferenceID: {$gsOTP}";
} catch (\Exception $e) {
	echo $e->getMessage();
}

/* Send OTP by Whatsapp Messenger */
/*
$gsOtp = new OTPHandler(API_KEY);
try {
	$gsOTP = $gsOtp->setProvider('whatsapp')->sendMessenger(MOBILE, TEMPLATE_ID);
	echo "ReferenceID: " . $gsOTP;
} catch (Exception $e) {
	echo "Error: " . $e->getMessage();
}
*/

/* Send OTP by Whatsapp Messenger with params */
/*
$gsOtp = new OTPHandler(API_KEY);
try {
	$gsOTP = $gsOtp->setMobile(MOBILE)
		->setProvider('whatsapp')
		->setTemplateID(6)
		->setParam1("sample param 1")
		->setParam2('sample param 2')
		->sendMessenger();
	echo "ReferenceID: " . $gsOTP;
} catch (Exception $e) {
	echo "Error: " . $e->getMessage();
}
*/
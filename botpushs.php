<?php

$status = $_GET['status'];
$date = $_GET['date'];
$name = $_GET['name'];
$station = $_GET['station'];
$equip = $_GET['equip'];
$model = $_GET['model'];
$detail = $_GET['detail'];



require "vendor/autoload.php";

$access_token = 'E0rNadLQxcM8z3csE7jVa0WvRizTSvIOoUD4OFJRmkh+wzNw5FDcMys8aFqkuj34AK2f/9wWdKEyJmXoTZzJjWQp+VkcojGdUw0Kv3unksHLOQqV/keThADiOsIigNVD+kdd5jChI8SgutUVtfgqOwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '61f91ff757466b4e300abd7b86881a71';

$pushID = 'Cd03b4c83f1e3cff44a85b4e444d90091';

//test
//$pushID = 'C905dc957360f71026e3a5b820f671deb';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);


$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("ระบบแจ้งอุปกรณ์ชำรุด\nสถานะเอกสาร : ".$status."\nวันที่แจ้งชำรุด : ".$date."\nผู้แจ้ง : ".$name."\nสถานีไฟฟ้า : ".$station."\nอุปกรณ์ : ".$equip."\nผลิตภัณฑ์/รุ่น  : ".$model."\nรายละเอียดการชำรุด : ".$detail."\nhttp://www.ss12eap.com/erequest");




$response = $bot->pushMessage($pushID, $textMessageBuilder);

//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

function goback()
{
  //  header("Location: {$_SERVER['HTTP_REFERER']}?success=1");
    header("Location:http://www.ss12eap.com/erequest/requests?success=1");
    exit;
}
goback();






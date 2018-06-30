<?php

$name = $_GET['name'];
$mobile = $_GET['mobile'];
$email = $_GET['email'];
$line = $_GET['line'];
$accname = $_GET['accname'];
$accno = $_GET['accno'];
$bank = $_GET['bank'];



require "vendor/autoload.php";

$access_token = 'BrmEUzMed7LX0awTog3h98CadcpBXdzwloG/HA77y3TWhOG8cOWRONkNkUlFw9mrAK2f/9wWdKEyJmXoTZzJjWQp+VkcojGdUw0Kv3unksGrek2DZodmG9IeBBxxhvnWXxXQJ/6yK2WYLybykpVOmgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b82c3a36a40cc849cdd3785dd74a330c';

$pushID = 'C905dc957360f71026e3a5b820f671deb';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);


$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("eRequestแจ้งอุปกรณ์ชำรุด\nสถานะเอกสาร : ".$username."\nวันที่แจ้งชำรุด : ".$mobile."\nผู้แจ้ง : ".$bank."\nสถานีไฟฟ้า : ".$accname."\nอุปกรณ์ : ".$accno."\nผลิตภัณฑ์\/รุ่น  : ".$amount."\nรายละเอียดการชำรุด : ".$bankto);




$response = $bot->pushMessage($pushID, $textMessageBuilder);

//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

function goback()
{
    header("Location: {$_SERVER['HTTP_REFERER']}?success=1");
    exit;
}
goback();






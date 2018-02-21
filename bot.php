<?php
$strAccessToken = 'kCBWBsJHViYqh6kWpgXi/P7k3CbRUkG0cQuNmZOBWz3YvhCmXX9iw+np9xxQnA3t4mXB6oXm23inlEvJeISVLy1Xmla0zBvk0Pcw6U0MJOKJbtNdiiIJnEtLYhl05KnNWXL+dyILYhrn2QGWG3iFrgdB04t89/1O/w1cDnyilFU=';

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
 if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  //$arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
  $arrPostData['messages'][0]['text'] = "สวัสดีชาวโลก";
}else if(($arrJson['events'][0]['message']['text'] == "help") or ($arrJson['events'][0]['message']['text'] == "คู่มือ")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
  คู่มืออยู่ระหว่างการจัดทำ
    พิมพ์ 1 => หมวดที่ 1 สายด่วน
      พิมพ์ 1.1 => หมวดหมู่ย่อย 1.1  สายด่วนธนาคาร
      พิมพ์ 1.2 => หมวดหมู่ย่อย 1.2  สายด่วนบริษัทประกัน
      พิมพ์ 1.3 => หมวดหมู่ย่อย 1.3  สายด่วนโรงพยาบาล
      พิมพ์ 1.4 => หมวดหมู่ย่อย 1.4  สายด่วนฉุกเฉิน
    พิมพ์ 2 => หมวดที่ 2 สอบถามยอดค่าชำระ
     พิมพ์ 2.1 => หมวดหมู่ย่อย 2.1  สอบถามค่าไฟฟ้าส่วนภูมิภาค
     พิมพ์ 2.2 => หมวดหมู่ย่อย 2.2  สอบถามค่าไฟฟ้านครหลวง
     พิมพ์ 2.3 => หมวดหมู่ย่อย 2.3  สอบถามค่าโทรศัพท์รายเดือน เอไอเอส /เอไอเอส 3G
     พิมพ์ 2.4 => หมวดหมู่ย่อย 2.4  สอบถามค่าโทรศัพท์รายเดือน ดีเเทค /ดีแทคไตรเนต
     พิมพ์ 2.5 => หมวดหมู่ย่อย 2.5  สอบถามค่าโทรศัพท์ทรูมูฟ /ทรูมูฟ เฮส  
  ";
}else if(($arrJson['events'][0]['message']['text'] == "ชื่ออะไร") or ($arrJson['events'][0]['message']['text'] == "คุณชื่ออะไร") or ($arrJson['events'][0]['message']['text'] == "ชื่อของคุณคืออะไร")){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันชื่อ MR.HUG BOT";  
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันทำอะไรไม่ได้เลย คุณต้องสอนฉันอีกเยอะ";
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "พิมพ์ คู่มือ หรือ help เพื่อดูการใช้งาน ";
}
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>

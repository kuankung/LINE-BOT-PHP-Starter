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
}else if($arrJson['events'][0]['message']['text'] == "สวัสดีครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีชาวโลก";  
}else if($arrJson['events'][0]['message']['text'] == "สวัสดีค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีชาวโลก";  
}else if($arrJson['events'][0]['message']['text'] == "หวัดดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีชาวโลก";
 }else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันชื่อ MR.HUG BOT"; 
 }else if($arrJson['events'][0]['message']['text'] == "ชื่อของคุณคืออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันชื่อ MR.HUG BOT";   
 }else if($arrJson['events'][0]['message']['text'] == "คุณชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันชื่อ MR.HUG BOT";  
}else if($arrJson['events'][0]['message']['text'] == "help"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
  คู่มืออยู่ระหว่างการจัดทำ
    พิมพ์ 1 => สายด่วน
      พิมพ์ 1.1 => สายด่วนธนาคาร
      พิมพ์ 1.2 => สายด่วนบริษัทประกัน
      พิมพ์ 1.3 => สายด่วนโรงพยาบาล
      พิมพ์ 1.4 => สายด่วนฉุกเฉิน
    พิมพ์ 2 => สอบถามยอดค่าชำระ
     พิมพ์ 2.1 => สอบถามค่าไฟฟ้าส่วนภูมิภาค
     พิมพ์ 2.2 => สอบถามค่าไฟฟ้านครหลวง
     พิมพ์ 2.3 => สอบถามค่าโทรศัพท์รายเดือน เอไอเอส /เอไอเอส 3G
     พิมพ์ 2.4 => สอบถามค่าโทรศัพท์รายเดือน ดีเเทค /ดีแทคไตรเนต
     พิมพ์ 2.5 => สอบถามค่าโทรศัพท์ทรูมูฟ /ทรูมูฟ เฮส  
  ";
 }else if($arrJson['events'][0]['message']['text'] == "คู่มือ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
  คู่มืออยู่ระหว่างการจัดทำ
    พิมพ์ 1 => สายด่วน
      พิมพ์ 1.1 => สายด่วนธนาคาร
      พิมพ์ 1.2 => สายด่วนบริษัทประกันภัย
      พิมพ์ 1.3 => สายด่วนโรงพยาบาล
      พิมพ์ 1.4 => สายด่วนฉุกเฉิน
    พิมพ์ 2 => สอบถามยอดค่าชำระ
     พิมพ์ 2.1 => สอบถามค่าไฟฟ้าส่วนภูมิภาค
     พิมพ์ 2.2 => สอบถามค่าไฟฟ้านครหลวง
     พิมพ์ 2.3 => สอบถามค่าโทรศัพท์รายเดือน เอไอเอส /เอไอเอส 3G
     พิมพ์ 2.4 => สอบถามค่าโทรศัพท์รายเดือน ดีเเทค /ดีแทคไตรเนต
     พิมพ์ 2.5 => สอบถามค่าโทรศัพท์ทรูมูฟ /ทรูมูฟ เฮส  
  "; 
 }else if($arrJson['events'][0]['message']['text'] == "1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
      พิมพ์ 1.1 => สายด่วนธนาคาร
      พิมพ์ 1.2 => สายด่วนบริษัทประกันภัย
      พิมพ์ 1.3 => สายด่วนโรงพยาบาล
      พิมพ์ 1.4 => สายด่วนฉุกเฉิน
  ";
}else if($arrJson['events'][0]['message']['text'] == "1.1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
  สายด่วนธนาคาร
   ธนาคารกรุงเทพ=>1331 หรือ 02-645 5555
   ธนาคารกรุงไทย=>02-111 1111
   ธนาคารกสิกรไทย=>02-888 8888
   ธนาคารไทยพาณิชย์=>02-777 7777
   ที่เหลืออยู่ระหว่างการจัดทำ
  "; 
 }else if($arrJson['events'][0]['message']['text'] == "1.2"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
  สายด่วนประกันภัย

   ที่เหลืออยู่ระหว่างการจัดทำ
  "; 
  }else if($arrJson['events'][0]['message']['text'] == "1.1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
  สายด่วนโรงบาล

   ที่เหลืออยู่ระหว่างการจัดทำ
  "; 
 }else if($arrJson['events'][0]['message']['text'] == "1.1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
  สายด่วนฉุกเฉิน

   ที่เหลืออยู่ระหว่างการจัดทำ
  ";
  }else if($arrJson['events'][0]['message']['text'] == "2"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
  สอบถามยอดค่าชำระ
   พิมพ์ 2.1=>สอบถามค่าไฟฟ้าส่วนภูมิภาค
   พิมพ์ 2.2=>สอบถามค่าไฟฟ้านครหลวง
   พิมพ์ 2.3=>สอบถามค่าโทรศัพท์รายเดือน เอไอเอส /เอไอเอส 3G
   พิมพ์ 2.4=>สอบถามค่าโทรศัพท์รายเดือน ดีเเทค /ดีแทคไตรเนต
   พิมพ์ 2.5=>สอบถามค่าโทรศัพท์ทรูมูฟ /ทรูมูฟ เฮส  
  ";  
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

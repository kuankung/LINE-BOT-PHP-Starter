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
      พิมพ์ 1.4 => สายด่วนฉุกเฉิน/คอลเซ็นเตอร์
    พิมพ์ 2 => สอบถามยอดค่าชำระ
     พิมพ์ 2.1 => สอบถามค่าไฟฟ้าส่วนภูมิภาค
     พิมพ์ 2.2 => สอบถามค่าไฟฟ้านครหลวง
     พิมพ์ 2.3 => สอบถามค่าโทรศัพท์รายเดือน เอไอเอส /เอไอเอส 3G
     พิมพ์ 2.4 => สอบถามค่าโทรศัพท์รายเดือน ดีเเทค /ดีแทคไตรเนต
     พิมพ์ 2.5 => สอบถามค่าโทรศัพท์ทรูมูฟ /ทรูมูฟ เอช
     .
     .
     .
     .
     .
     .
     .
    พิมพ์ 10 =>แนะนำติชม
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
      พิมพ์ 1.4 => สายด่วนฉุกเฉิน/คอลเซ็นเตอร์
    พิมพ์ 2 => สอบถามยอดค่าชำระ
     พิมพ์ 2.1 => สอบถามค่าไฟฟ้าส่วนภูมิภาค
     พิมพ์ 2.2 => สอบถามค่าไฟฟ้านครหลวง
     พิมพ์ 2.3 => สอบถามค่าโทรศัพท์รายเดือน เอไอเอส /เอไอเอส 3G
     พิมพ์ 2.4 => สอบถามค่าโทรศัพท์รายเดือน ดีเเทค /ดีแทคไตรเนต
     พิมพ์ 2.5 => สอบถามค่าโทรศัพท์ทรูมูฟ /ทรูมูฟ เอช
     .
     .
     .
     .
     .
     .
   พิมพ์ 10 =>แนะนำติชม
  "; 
 }else if($arrJson['events'][0]['message']['text'] == "1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
  สายด่วน
    พิมพ์ 1.1=>สายด่วนธนาคาร
    พิมพ์ 1.2=>สายด่วนบริษัทประกันภัย
    พิมพ์ 1.3=>สายด่วนโรงพยาบาล
    พิมพ์ 1.4=>สายด่วนฉุกเฉิน/คอลเซ็นเตอร์
  ";
}else if($arrJson['events'][0]['message']['text'] == "1.1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
สายด่วนธนาคาร
 ธนาคารไทยพาณิชย์=>02-777-7777
 ธนาคารกสิกรไทย=>02-888-8888
 ธนาคารกรุงศรีอยุธยา=>1572
 ธนาคารกรุงเทพ=>1333
 ธนาคารกรุงไทย=>02-111-1111
 ธนาคารทหารไทย=>1558
 ธนาคารอาคารสงเคราะห์=>02-645-9000
 ธนาคารออมสิน=>1115
 ธนาคารซีไอเอ็มบีไทย=>02-626-7777
 ธนาคารยูโอบี=>02-285-1555
 ธนาคารเกียรตินาคิน=>02-165-5555
 ธนาคารไทยเครดิต=>02-697-5444
 ธนาคารซิตี้แบงค์=>1588
 ธนาคารธนชาติ=>1770
 ธนาคารอิสลาม=>02-204-2766
 และธนาคารทิสโก้=>02-633-6000
  "; 
}else if($arrJson['events'][0]['message']['text'] == "1.2"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
สายด่วนประกันภัย
  บริษัท กรุงเทพประกันภัย จำกัด
- สามารถติดต่อได้ 02-285-8000    
  บริษัท เอเชียประกันภัย 1950 จำกัด (มหาขน)
- สามารถติดต่อได้ 02-869-3333
  บริษัท สินมั่นคงประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-378-7000 
 บริษัท อลิอันซ์ ซี.พี ประกันภัย จำกัด
- สามารถติดต่อได้ 02-638-9333  
 บริษัท ประกันภัยไทยวิวัฒน์ จำกัด (มหาชน)
- สามารถติดต่อได้ 02-248-0900
 บริษัท ทิพยประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-239-2200
 บริษัท วิริยะประกันภัย จำกัด
- สามารถติดต่อได้ 02-239-1557 
 บริษัท ประกันภัยคุ้มภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-257-8000
 บริษัท อาคเนย์ประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-631-1311
 บริษัท สินทรัพย์ประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-541-5050
 บริษัท เมืองไทยประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-665-4000
 บริษัท แอลเอ็มจี ประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-661-6000
 บริษัท ไทยประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-613-0100  
 บริษัท นวกิจประกันภัย จำกัด
- สามารถติดต่อได้ 02-238-5058  
 บริษัท เอ็มเอสไอจี ประกันภัย (ประเทศไทย) จำกัด
- สามารถติดต่อได้ 02-788-8888
 บริษัท ธนชาติประกันภัย จำกัด
- สามารถติดต่อได้ 02-661-7999
 บริษัท ไทยพัฒนาประกันภัย จำกัด
- สามารถติดต่อได้ 02-253-4141
 บริษัท เทเวศประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-670-4444 
 บริษัท โอสถสภาประกันภัย จำกัด
- สามารถติดต่อได้ 02-732-3671
 บริษัท มิตซุย สุมิโตโม อินชัวรันซ์ จำกัด
- สามารถติดต่อได้ 02-679-6165 
 บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-636-8118 
 บริษัท ไอโออิ กรุงเทพประกันภัย จำกัด
- สามารถติดต่อได้ 02-677-3999  
 บริษัท ศรีอยุธยาประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-263-0335 
 บริษัท อินทรประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-247-9261 
 บริษัท ทูนประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-732-3671
 บริษัท ยูเนี่ยนอินเตอร์ ประกัยภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-502-2999 
 บริษัท กมลประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-502-2999
 บริษัท โตเกียวมารีนประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-686-8888
 บริษัท มิตรแท้ประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-640-7777
 บริษัท สยามซิตี้ประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-202-9500
 บริษัท สหนิรภัยประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-236-0049 
 บริษัท สหมงคลประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-221-4373
 บริษัท เอซไอเอ็นเอ โอเวอร์ซีส์ อินชัวรันซ์ จำกัด
- สามารถติดต่อได้ 02-611-4040  
 บริษัท แอกซ่าประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-679-7600 
 บริษัท เอราวัณประกันภัย จำกัด (มหาชน)
- สามารถติดต่อได้ 02-224-0056
 บริษัท คูเนีย ประกันภัย (ประเทศไทย) จำกัด
- สามารถติดต่อได้ 02-670-2100 
 บริษัท ฟีนิกซ์ ประกันภัย (ประเทศไทย) จำกัด
- สามารถติดต่อได้ 02-720-1128  
 บริษัท ลิเบอร์ตี้ประกันภัย จำกัด
- สามารถติดต่อได้ 02-322-3001
  "; 
}else if($arrJson['events'][0]['message']['text'] == "1.3"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
  สายด่วนโรงบาล
โรงพยาบาลกล้วยน้ำไท=>0-2381-2006-20
โรงพยาบาลกรุงเทพ =>1719 , 0-2310-3000
โรงพยาบาลกรุงเทพ จันทบุรี (เกาะช้าง)=>0-3931-9888
โรงพยาบาลกรุงเทพ ระยอง=>0-3892-1999
โรงพยาบาลกรุงเทพ พัทยา=>0-3825-9999
โรงพยาบาลกรุงเทพ สมุย=>0-7742-9500
โรงพยาบาลกรุงเทพคริสเตียน=>0-2233-6981-9
โรงพยาบาลกรุงธน=>0-2438-0040-5
โรงพยาบาลเกษมราษฎร์ ประชาชื่น=>0-2910-1600
โรงพยาบาลเกษมราษฎร์ บางแค=>0-2910-1600-45
โรงพยาบาลเกษมราษฎร์ สุขาภิบาล3=>0-2729-3000
โรงพยาบาลเกษมราษฎร์ รัตนาธิเบศร์=>0-2594-0020-65
โรงพยาบาลเกษมราษฎร์ สระบุรี=>0-3631-5555-94
โรงพยาบาลเกษมราษฎร์ ศรีบุรินทร์=>0-5391-0999
โรงพยาบาลขอนแก่น=>0-4333-6789
โรงพยาบาลคามิลเลียน=>0-2185-1444
โรงพยาบาลจุฬารัตน์=>0-2738-9900-9
โรงพยาบาลเจ้าพระยา=>0-2434-1111
โรงพยาบาลจิตเวชขอนแก่นราชนครินทร์=>0-4322-7422
โรงพยาบาลจิตเวชนครสวรรค์=>0-5626-7280
โรงพยาบาลเซ็นทรัลเยนเนอรัล=>0-2552-8777  
โรงพยาบาลเซนต์หลุยส์=>0-2210-9999
โรงพยาบาลตำรวจ=>0-2252-8111-25
โรงพยาบาลตราด=>0-3953-1784-86
โรงพยาบาลทหารเรือกรุงเทพ=>0-2411-2089
โรงพยาบาลไทยนครินทร์=>0-2361-2727
โรงพยาบาลไทยจักษุคลินิก=>0-2416-5454
โรงพยาบาลธนบุรี=>0-2412-0020
โรงพยาบาลนครธน=>0-2416-5454
โรงพยาบาลบางโพ=>0-2587-0136-44
โรงพยาบาลบางแก้ว=>0-7469-7381-3
โรงพยาบาลบางมด=>0-2867-0606
โรงพยาบาลบำรุงราษฏร์=>0-2667-1000
โรงพยาบาลบีเอ็นเอช=>0-2686-2700
โรงพยาบาลปิยะเวท=>0-2625-6500
โรงพยาบาลปิยะมินทร์=>0-2316-0026-42
สถาบันประสาทวิทยา=>0-2354-7075-83
โรงพยาบาลพระรามเก้า=>0-2-202-9999
โรงพยาบาลพญาไท 1=>0-2640-1111
โรงพยาบาลพญาไท 2 =>0-2617-2444
โรงพยาบาลเพชรรัชต์=>0-3241-7070-9
โรงพยาบาลภูมิพลอดุลยเดช=>0-2534-7000
โรงพยาบาลมิชชั่น=>0-2282-1100
โรงพยาบาลมิชชั่น ภูเก็ต=>0-7623-7220-6
โรงพยาบาลยันฮี=>0-2879-0300
โรงพยาบาลรามคำแหง=>0-2374 0200-16
โรงพยาบาลลาดพร้าว=>0-2530-2244
โรงพยาบาลลานนา=>0-5399-9777
โรงพยาบาลวิชัยยุทธ=>0-2618-6200
โรงพยาบาลวิภาวดี=>0-2941-2800
โรงพยาบาลเวชธานี=>0-2734-0000
โรงพยาบาลศิครินทร์=>0-2366-9900-99
โรงพยาบาลศรีสยาม=>0-2944 8015-30
โรงพยาบาลศรีสะเกษ=>0-4561-1503
โรงพยาบาลสงฆ์=>0-2354-4310
โรงพยาบาลสมิติเวช สุขุมวิท=>0-2711-8000
โรงพยาบาลสมิติเวช ศรีนครินทร์=>0-2731-7000
โรงพยาบาลสมิติเวช ศรีราชา=>0-3832-0300
โรงพยาบาลเด็กสมิติเวช=>0-2378-9000
โรงพยาบาลสุขุมวิท=>0-2391-0011
โรงพยาบาลสมเด็จพระปิ่นเกล้า=>0-2460-0000
โรงพยาบาลสินแพทย์=>0-2793-5099
โรงพยาบาลกลาง=>0-2221-6141
โรงพยาบาลกลางกรมราชทัณฑ์=>0-2589-5250
โรงพยาบาลค่ายภาณุรังสี=>0-3232-8163
โรงพยาบาลเซ็นทรัล ปาร์ค=>0-2312-7261-9
โรงพยาบาลตาหูคอจมูก กรุงเทพฯ=>0-2579-1770-4
โรงพยาบาลธัญญารักษ์=>0-2531-0080-8
โรงพยาบาลนิติจิตเวช=>0-2889-9191
โรงพยาบาลบี.แคร์ เมดิคอลเซ็นเตอร์=>0-2523-3359-71
โรงพยาบาลพระนั่งเกล้า นนทบุรี=>0-2527-0246
โรงพยาบาลพระมงกุฏเกล้า=>0-2354-7600
โรงพยาบาลแม่สะเรียง=>0-5362-1027
โรงพยาบาลราชวิถี=>0-2354-8108-9
โรงพยาบาลเลย=>0-4281-1541
โรงพยาบาลศิริราช=>0-2411-0241-9
โรงพยาบาลศูนย์มะเร็งกรุงเทพ=>0-2785-5716-20
โรงพยาบาลสมเด็จพระบรมราชเทวี ณ ศรีราชา=>0-3832-2157-9
โรงพยาบาลสมเด็จพระยุพราชฉวาง=>0-7548-113-5
โรงพยาบาลสมเด็จพระยุพราชนครไทย=>0-5538-9060-1
  "; 
 }else if($arrJson['events'][0]['message']['text'] == "1.4"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "
  สายด่วนฉุกเฉิน
ศูนย์ดับเพลิงศรีอยุธยา=>199
หน่วยแพทย์กู้ชีพ กทม.=>1554
กองปราบปราม=>1195
ตำรวจทางหลวง=>1193
สายด่วนกรมทางหลวง=>1586
ตำรวจท่องเที่ยว=>1155
ศูนย์นเรนทร=>1669
ศูนย์รับแจ้งอุบัติเหตุ 24 ชม.=>0-2751-0951-3
ศูนย์วิทยุกรุงธน=>0-2451-7228-9
ศูนย์วิทยุปอเต็กตึ๊ง 24 ชม.=>0-2226-4444-8
ศูนย์วิทยุรามา=>0-2354-6999
ศูนย์ส่งกลับและรถพยาบาลกรมตำรวจ=>1691
ศูนย์เอราวัณ กทม=>1646
ศูนย์ควบคุมระบบการจราจรบนทางด่วน=>1543
ศูนย์ควบคุมและสั่งการจราจร=>1197
ศูนย์คุ้มครองผู้โดยสารสาธารณะ=>1584
ศูนย์จราจรอุบัติเหตุ จส.100=>1137
สถานีวิทยุชุมชน ร่วมด้วยช่วยกัน (FM 96)=>1677
สถานีวิทยุ สวพ. 91=>1644
สถานีวิทยุจราจรเพื่อสังคม (FM 99.5)=>1255
ศูนย์เตือนภัยพิบัติแห่งชาติ=>1860
ศูนย์บริการข่าวอากาศ กรมอุตุนิยมวิทยา=>1182
เหตุด่วนทางน้ำ ศูนย์ปลอดภัยทางน้ำ=>1199
สายด่วนกรมป้องกันและบรรเทาสาธารณภัย=>1784
อุบัติเหตุทางน้ำ กองบัญชาการตำรวจ=>1196
ศูนย์ประชาบดี=>1300
ศูนย์ปรึกษาปัญหาชีวิต=>0-2713-6793
ฮอทไลน์คลายเครียด=>1667
ศูนย์ดำรงธรรม=>1567
ศูนย์บริการข้อมูลภาครัฐเพื่อประชาชน=>1111
ศูนย์พิทักษ์สิทธิเด็กและครอบครัว=>1579
ศูนย์รับแจ้งข่าวยาเสพติด =>1688
ศูนย์สวัสดิภาพเด็ก เยาวชนและสตรี=>0-2282-3892
สายด่วนบัตรทอง=>1330
สายด่วนผู้บริโภคกับ อย.=>1556
สายด่วนร้องทุกข์ สคบ.=>1166
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
 }else if($arrJson['events'][0]['message']['text'] == "2.1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "อยู่ระหว่างจัดทำ"; 
 }else if($arrJson['events'][0]['message']['text'] == "2.2"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "อยู่ระหว่างจัดทำ"; 
 }else if($arrJson['events'][0]['message']['text'] == "2.3"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "อยู่ระหว่างจัดทำ"; 
 }else if($arrJson['events'][0]['message']['text'] == "2.4"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "อยู่ระหว่างจัดทำ"; 
 }else if($arrJson['events'][0]['message']['text'] == "2.5"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "อยู่ระหว่างจัดทำ"; 
 }else if($arrJson['events'][0]['message']['text'] == "10"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ขอบคุณผู้มาเยือน MR.HUG BOT ทุก่ท่าน ท่านสามารถร่วมแนะนำ ติชม เพื่อพัํฒนาบริการของเราให้ดียิ่งขึ้น เพื่อเป็นประโยชน์ต่อส่วนร่วม โดยส่งไลน์ให้ผู้พัฒนาที่ไอดี kuankung";   
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

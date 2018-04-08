<?php
//include('dbconnect.php');
$MailTo="kuankung.s@gmail.com";

//$strSQL = "SELECT * FROM user_info WHERE email = '$MailTo' ";
//$resultSQL = mysqli_query($conn,$strSQL);
//$objResult = mysqli_fetch_assoc($resultSQL);

$password = "123";


/*
	mail(to,subject,message,headers)
	to คือ อีเมล์ของผู้รับ 
	subject คือ หัวจดหมาย 
	message คือ ข้อความ 
	headers คือ ส่วนเพิ่มเติมจะมีหรือไม่มีก็ได้ เช่น Cc และ Bcc แต่ละส่วนจะแยกด้วย (\r\n)
*/
//$MailTo = $_POST['MailTo'] ; //อีเมล์ของผู้รับ 
$MailFrom = "kuankung.s@gmail.com" ; //อีเมลล์ผู้ส่ง
$MailSubject = "ลืมรหัสผ่าน" ; //หัวจดหมาย 
$MailMessage = "รหัสผ่านของคุณคือ ".$password ; //ข้อความ 

$Headers = "MIME-Version: 1.0\r\n" ;
$Headers .= "Content-type: text/html; charset=windows-874\r\n" ;
// ส่งข้อความเป็นภาษาไทย ใช้ "windows-874"
$Headers .= "From: ".$MailFrom." <".$MailFrom.">\r\n" ;
$Headers .= "Reply-to: ".$MailFrom." <".$MailFrom.">\r\n" ;
//$Headers .= "X-Priority: 3\r\n" ;
//$Headers .= "X-Mailer: PHP mailer\r\n" ;
$send = @mail($MailTo, $MailSubject , $MailMessage, $Headers);
if($send)
{
echo "Send Mail True" ; //ส่งเรียบร้อย
}else{
echo "Send Mail Error" ; //ไม่สามารถส่งเมล์ได้
}

?>

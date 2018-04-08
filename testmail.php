<?php
include('dbconnect.php');
$MailTo=$_POST['mail'];

$strSQL = "SELECT * FROM user_info WHERE email = '$MailTo' ";
$resultSQL = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_assoc($resultSQL);

$password = $objResult["password"];

require("PHPMailer_v5.0.2/class.phpmailer.php");
$mail = new PHPMailer();

$body = "ทดสอบการส่งอีเมล์ภาษาไทย UTF-8 ผ่าน SMTP Server ด้วย PHPMailer.";

/***
Server SMTP/POP : mail.thaicreate.com
Email Account : webmaster@thaicreate.com
Password : 123456
*/
require_once('PHPMailer_v5.0.2/class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsHTML(true);
$mail->IsSMTP();
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = ""; // sets the prefix to the servier
$mail->Host = "mail.gmail.com"; // sets GMAIL as the SMTP server
$mail->Port = 465; // set the SMTP port for the GMAIL server
$mail->Username = "kuankung.s@gmail.com"; // GMAIL username
$mail->Password = "Ikqsang58"; // GMAIL password
$mail->From = "kuankung.s@gmail.com"; // "name@yourdomain.com";
//$mail->AddReplyTo = "support@thaicreate.com"; // Reply
$mail->FromName = "Saren.com";  // set from Name
$mail->Subject = "ลืมรหัสผ่าน";
$mail->Body = "My Body & <b>My Description</b>";
$mail->AddAddress("kuankung.s@gmail.com", "Mr.Adisorn Boonsong"); // to Address
$mail->Send();
/*
	mail(to,subject,message,headers)
	to คือ อีเมล์ของผู้รับ 
	subject คือ หัวจดหมาย 
	message คือ ข้อความ 
	headers คือ ส่วนเพิ่มเติมจะมีหรือไม่มีก็ได้ เช่น Cc และ Bcc แต่ละส่วนจะแยกด้วย (\r\n)

//$MailTo = $_POST['MailTo'] ; //อีเมล์ของผู้รับ 
$MailFrom = "kuankung.s@gmail.com" ; //อีเมลล์ผู้ส่ง
$MailSubject = "ลืมรหัสผ่าน" ; //หัวจดหมาย 
$MailMessage = "รหัสผ่านของคุณคือ ".$password ; //ข้อความ 

//$Headers = "MIME-Version: 1.0\r\n" ;
$Headers = "Content-type: text/html; charset=windows-874\r\n" ;
// ส่งข้อความเป็นภาษาไทย ใช้ "windows-874"
$Headers .= "From: ".$MailFrom." <".$MailFrom.">\r\n" ;
//$Headers .= "Reply-to: ".$MailFrom." <".$MailFrom.">\r\n" ;
//$Headers .= "X-Priority: 3\r\n" ;
//$Headers .= "X-Mailer: PHP mailer\r\n" ;
$send = @mail($MailTo, $MailSubject,$MailMessage, $Headers);
if($send)
{
echo "Send Mail True" ; //ส่งเรียบร้อย
}else{
echo "Send Mail Error" ; //ไม่สามารถส่งเมล์ได้
}
*/
?>

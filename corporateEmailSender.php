<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

  //Create an instance; passing `true` enables exceptions
   $mail = new PHPMailer(true);
  if(isset($_POST['email'])){
   $to = "najarsalman4@gmail.com"; // this is your Email address
   $from = $_POST['email']; // this is the sender's Email address
   if(isset($_POST['company'])){
     $company_name = $_POST['company'];
   } else {
     $company_name = '';
   }
   $first_name = $_POST['name'];
   if(isset($_POST['phone'])){
     $contact_number = $_POST['phone'];
   } else {
     $contact_number = '';
   }
  
     
     $message = $_POST['help'];
     $subject = "You have an email from Health Screening App | TheTestingPro domain.";
  
 
   try {
     //Server settings
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'mail.stie.com.sg';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'info@stie.com.sg';                     //SMTP username
     $mail->Password   = 'in5#aS135!}#$';                               //SMTP password
     $mail->SMTPSecure = "tls";//PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
     //Recipients
     $mail->setFrom('info@thetestingpro.com', 'Info');
     $mail->addAddress('hs@thetestingpro.com', 'TheTestingPro');     //Add a recipient
     $mail->addAddress('najarsalman4@gmail.com');               //Name is optional
    
 
     //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('./images/fihlogo.png', 'TheTesthingPro');    //Optional name
 
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Here is the subject';
     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
     $content  = '<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HealthScreening|TheTestingPro Mail</title>
        </head>
        
        <body>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" valign="top" bgcolor="#f5f8fd;"
                style="background-color: #f5f8fd;"><br> <br>
                <table width="600" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center" valign="top" bgcolor="#f5f8fd;"
                      style="background-color: #f5f8fd; font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #000000; padding: 0px 15px 10px 15px;">
                      
                      <img src="https://hs.thetestingpro.com/images/fihlogo.png" style="display:block;width:100%;height:150px" alt="TheTestingPro">

                      
                      <br>
                      <span style="font-size:18px;font-weight:400px;"><b>'.$subject.'</b></span>							
                      <br>
                      
                      <div>
                        <br>'.$message.'<br>
                        <br><u>Sender Details</u><br>
                        <b>'.$first_name.'</b><br>
                        Company: '.$company_name.'<br>
                        Contact Number: '.$contact_number.'<br>
                        Email: '.$from.'<br>
                        
                      </div>
                    </td>
                  </tr>
                </table> <br> <br>
                </td>
            </tr>
          </table>
        </body>
        </html>';
  
        $mail->MsgHTML($content); 
 
     $mail->send();
     echo "<script> alert('Message has been sent');</script>";
     if($mail->Send()) {
       $autoRespond = new PHPMailer();
       $autoRespond->IsSMTP();
       $autoRespond->CharSet    = 'UTF-8';
       $autoRespond->SMTPDebug  = 0;
       $autoRespond->SMTPAuth   = TRUE;
       $autoRespond->SMTPSecure = "tls";
       $autoRespond->Port       = 587;
       $autoRespond->Username   = "khalid@stie.com.sg";
       $autoRespond->Password   = "Kh1234E!#";
       $autoRespond->Host       = "mail.stie.com.sg";
     
       $autoRespond->setFrom('info@stie.com.sg', 'Info');
       $autoRespond->AddAddress("$from"); 
       $autoRespond->Subject = "TheTestingPro™ has received your email"; 
       $Message='<html xmlns="http://www.w3.org/1999/xhtml">
       <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>HealthScreening|TheTestingPro Mail</title>
       </head>
       
       <body>
         <table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr>
             <td  valign="top" bgcolor="#f5f8fd;"
               style="background-color: #f5f8fd;"><br> <br>
               <table width="600" border="0" cellspacing="0" cellpadding="0">
                 <tr>
                   <td  valign="top" bgcolor="#f5f8fd;"
                     style="background-color: #f5f8fd; font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #000000; padding: 0px 15px 10px 15px;">
                     
                     
                     <div>
                       <b>Dear &nbsp;'.$first_name.'<br>
                       Thank you for your time to write to us. We will review it and get back to you within <br>three (3) working days.<br>
                       
                       Best Regards,<br>
                      TheTestingPro™ <br>
                       
                     </div>
                   </td>
                 </tr>
               </table> <br> <br>
               </td>
           </tr>
         </table>
       </body>
       </html>';
       $autoRespond->MsgHTML($Message); 
 
       $autoRespond->Send();
       echo "Auto Response sent!"; 
       }
 } catch (Exception $e) {
     echo "<script> alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
 }
 
      }
  ?>
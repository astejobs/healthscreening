<?php




require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
use PHPMailer\PHPmailer\SMTP;
use PHPMailer\PHPmailer\Exception;

  //Create an instance; passing `true` enables exceptions
   $mail = new PHPmailer\PHPMailer\PHPMailer(true);
   if(isset($_POST['send'])){


   if(isset($_POST['name'])){
    $name = $_POST['name'];
  } else {
    $name = '';
  }
  if(isset($_POST['email'])){
    $from = $_POST['email'];
  } else {
    $from = '';
  }
 
   
   if(isset($_POST['subject'])){
     $subjectmsg = $_POST['subject'];
   } else {
     $subjectmsg = '';
   }
   if(isset($_POST['phone'])){
     $contact_number = $_POST['phone'];
   } else {
     $contact_number = '';
   }
  
  
     
     $message = $_POST['help'];
     $subject = "You have an email from  ".$name." - Help Request";
  
 
   try {
     //Server settings
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'smtp.gmail.com.';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'najarsalman4@gmail.com';                     //SMTP username
     $mail->Password   = 'tjeo oreo zlrr ylmo';                         //SMTP password
     $mail->SMTPSecure = "tls";        //Enable implicit TLS encryption
     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
     //Recipients
     $mail->setFrom($from,"Info");

     $mail->addAddress('salmanquadir@outlook.com'); 
   
 
     //Content
     $mail->isHTML(true);                                  
     $mail->Subject = 'Here is the subject';
     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
     $content  = '<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HealthCare Hub Mail</title>
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
                      
                      <br>
                      <span style="font-size:18px;font-weight:400px;"><b>'.$subject.'</b></span>							
                      <br>
                      
                      <div>
                        <br>'.$message.'<br>
                        <br><u>Sender Details</u><br>
                        <b>'.$name.'</b><br>
                        Subject: '.$subjectmsg.'<br>  
                       
                        Contact Number.: '.$contact_number.'<br>
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
     $_SESSION['status']="Message has Been Sent!";
     
    
  } catch (Exception $e) {

    
    echo "<script> alert('AutoResponse could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
}
   }
  ?>
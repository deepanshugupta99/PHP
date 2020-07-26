<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
      $username = 'deepanshugupta7171@gmail.com';
      $subject = 'This is subject';
      $message = 'This is HTML message.';
      require('phpmailer/PHPMailerAutoload.php');
      require('phpmailer/class.smtp.php');
      require('phpmailer/class.phpmailer.php');
      $mail=new PHPMailer;
      $mail->Host='ssl://smtp.gmail.com';
      $mail->Port=465;
      $mail->IsSMTp();
      $mail->SMTPAuth=true;
      $mail->SMTPSecure='ssl';
      $mail->Username=$username;
      $mail->Password='enter password';
      $mail->setFrom($username);
      $mail->addAddress('deepanshugupta717a@gmail.com');
      $mail->Subject=$subject;
      $mail->Body=$message;
      if(!$mail->send()){
         echo "not send ".$mail->ErrerInfo;
      }
      else{
         echo "success";
      }
      ?>
      
   </body>
</html>
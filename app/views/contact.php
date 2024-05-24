<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/PHPMailer.php';

if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $message = $_POST['message'];

      $mail = new PHPMailer(true);
                try {
                  $mail->SMTPDebug = 0;                      //Enable verbose debug output
                  $mail->isSMTP();                                            //Send using SMTP
                  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                  $mail->Username   = 'minhthuyictu@gmail.com';                     //SMTP username
                  $mail->Password   = 'rubuejyehjhgvofz';                               //SMTP password
                  $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
              
                  //Recipients
                  $mail->setFrom('minhthuyictu@gmail.com', 'Dương Thị Minh Thúy_10-01-00');
                  $mail->addAddress('minhthuyictu@gmail.com');     //Add a recipient
              
                  //Content
                  $mail->isHTML(true);                                  //Set email format to HTML
                  $mail->Subject = 'Contact us';
                  $mail->Body    = "Họ tên: $name <br> Số điện thoại: $phone <br> Địa chỉ: $address <br> Email: $email <br> Nội dung: $message";
                  // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
              
                  $mail->send();

                  echo "<script>alert('Message has been sent')</script>";

              } catch (Exception $e) {
                  echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
              }
   }
?>
<section>
         <div class="bg_in">
            <div class="contact_form">
               <div class="contact_rightt">
                  <div class="form_contact_in">
                     <div class="box_contact">
                        <div class = "contact_title">
                           <h2>LIÊN HỆ CHO CHÚNG TÔI</h2>
                           <div class = "contact-content-title">
                              <span>Chúng tôi thích nghe bạn bè quan tâm đến quan hệ đối tác. Hỏi về cơ hội bán buôn và đầu tư của chúng tôi.</span>
                           </div>
                        </div>
                        <form name="FormDatHang" method="POST" action="" id="email-send-form" enctype="multipart/form-data" >
                           <div class="content-box_contact">
                              <div class="row">
                                 <div class="input">
                                    <label>Họ và tên: <span style="color:red;">*</span></label>
                                    <input type="text" name="name" id="name" onchange="" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Số điện thoại: <span style="color:red;">*</span></label>
                                    <input type="text" name="phone" id="phone" onchange="" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Địa chỉ: <span style="color:red;">*</span></label>
                                    <input type="text" name="address" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Email: <span style="color:red;">*</span></label>
                                    <input type="text" name="email" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Nội dung: <span style="color:red;">*</span></label>
                                    <textarea type="text" name="message" id = "message" class="clsipa"></textarea>
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row btnclass">
                                 <div class="input ipmaxn ">
                                    <input type="submit" class="btn-gui" name="send" id="" value="Gửi liên hệ">
                                    <input type="reset" class="btn-gui" value="Nhập lại">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="clear"></div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>

            <div class="clear"></div>
         </div>
      </section>
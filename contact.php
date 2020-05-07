<?php 
   $name = $_POST['Your name'];
   $email = $_POST['Your email'];
   $subject = $_POST['Subject'];
   $message =$_POST['Your Message'];
   $From = 'From: https://wai-htet.github.io/wai.github.io/'
   $to = 'htethw.369@gmail.com'

   $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 ?>
 <?php 
if ($_POST['submit']) {
  if(mail($to, $subject, $body, $from)) {
    echo '<p>Thank you for your email!</p>';
  } else {
     echo '<p>Oops! An error occurred. Try sending your message againg.</p>';
  }
}
?>

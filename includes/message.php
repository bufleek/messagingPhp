<?php
if (isset($_REQUEST)) {
    if (isset($_POST['submit_message'])) {
      include "../classes/message.php";
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone  = $_POST['phone'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $send = new message;
      $send->newMessage($name, $email, $phone, $message, $subject);
    }
} else {
    header("location :../?denied");
}

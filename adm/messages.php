<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messages | Admin</title>
</head>
<body>

<?php
include "../classes/message.php";
    $messages = new message;
    $messages = $messages->getMessages();
    foreach ($messages as $message) {
        //unread messages
        if($message['m_status'] == 0){
            echo'<div class="message">
            <h4 class="sender">From :   '.$message['s_name'].'</h4>
            <h5 class="email">'.$message['s_email'].'</h5>
            <h4 class="subject">Subject ::'.$message['m_subject'].'</h4>
            <a class="view"></a>
            <a href="?mark_as_read&id=">mark as read</a>
        </div>
        <hr>';
        }
        //read messages
        elseif ($message['m_status'] == 1) {
            
        }
    }
?>

<style>
    *{
        padding:0;
        margin:0;
    }
    .message{
        background:#bbb;
        padding:10px;
    }
    .message h5.email{
        padding:0 0 0 30px;
    }
    .message h4.subject{
        padding:10px 0 0 0;
    }
</style>
    
</body>
</html>
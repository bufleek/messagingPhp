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
session_start();
include "../classes/message.php";
    $cMessages = new message;
    
    echo '<h2>UNREAD MESSAGES</h2>';

    $messages = $cMessages->getMessages();

    //Display messages
    $initialMessageNo = 1;
    foreach ($messages as $message) {
        //Display unread messages
        if($message['m_status'] == 0){
            $messageNo = $initialMessageNo ++;
            echo'<div class="message">
            <p>'.$messageNo.'</p>
            <h4 class="sender">From :   '.$message['s_name'].'</h4>
            <h5 class="email">'.$message['s_email'].'</h5>
            <h4 class="subject">Subject ::'.$message['m_subject'].'</h4>
            <a class="view"></a>
            <a href="?markAsRead&mId='.$message['m_id'].'">mark as read</a>
        </div>
        <hr>';
        }
    }
    //Display read messages
    echo '<h2>READ MESSAGES</h2>';
    $initialMessageNo = 1;
    foreach($messages as $message){
        if($message['m_status'] == 1){
            $messageNo = $initialMessageNo ++;
            echo'<div class="message">
            <p>'.$messageNo.'</p>
            <h4 class="sender">From :   '.$message['s_name'].'</h4>
            <h5 class="email">'.$message['s_email'].'</h5>
            <h4 class="subject">Subject ::'.$message['m_subject'].'</h4>
            <a class="view"></a>
            <a href="?markAsUnread&mId='.$message['m_id'].'">Mark As Unread</a>
        </div>
        <hr>';
        }
    }
//Mark as read Mark As unread
    if (isset($_GET['markAsRead']) && isset($_GET['mId'])) {

        $mId = $_GET['mId'];
        if ($cMessages->markAsRead($mId)) {
            header("location :/?markedAsRead"); //not working
        }
        
    }elseif (isset($_GET['markAsUnread']) && isset($_GET['mId'])) {

        $mId = $_GET['mId'];
        if ($cMessages->markAsUnread($mId)) {
            header("location :/?markedAsUnread"); //not working
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
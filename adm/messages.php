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
        if($message['status'] == 0){

        }
        //read messages
        elseif ($message['status'] == 1) {
            
        }
    }
?>
    
</body>
</html>
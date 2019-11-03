<?php
include "db.php";
class message extends db{

    public function newMessage($name, $email, $phone, $message, $subject){
        $conn = new db;
        $sql = "INSERT INTO messages (name, email, phone, description, subject) VALUES('$name', '$email', '$phone', '$message', '$subject')";
        if ($conn->connect()->query($sql)) {
            header("location : ../../?sent");
        }
        else{
            header("location : ../../?errordb");
        }
    }
    
}
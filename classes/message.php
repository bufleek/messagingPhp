<?php
class connDb
{

    protected function connect()
    {
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "messaging";

        $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
        return $conn;
    }
}
class message extends connDb{

    public function newMessage($name, $email, $phone, $message, $subject){
        $conn = new connDb();
        $conn = $conn->connect();
        $sql = "INSERT INTO messages(s_name, s_email, s_phone, m_message, m_subject, m_status) values('$name', '$email', '$phone', '$message', '$subject', 0)";
        if (!$conn->connect_error) {
            $conn->query($sql);
            echo 'Message sent successfully';
        }
        else{
            echo 'failed to connect to db';
        }
    }

    public function getMessages(){
        $conn = new connDb;
        $conn = $conn->connect();
        $sql = "SELECT * FROM messages";
        $messages = $conn->query($sql);
        return $messages;
    }
//pending
    public function markAsRead($mId){
        $conn = new connDb;
        $conn = $conn->connect();

        $sql = "UPDATE messages SET m_status = 1 WHERE m_id = $mId";
        $conn->query($sql);
    }

    
}
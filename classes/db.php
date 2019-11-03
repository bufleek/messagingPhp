<?php

class db {
    private $serverName;
    private $userName;
    private $password;
    private $dbName;

    protected function connect(){
        $this->serverName = "localhost";
        $this->userName = "root";
        $this->password = "";
        $this->dbName = "messaging";

        $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
        return $conn;
    }
}

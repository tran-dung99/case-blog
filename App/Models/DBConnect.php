<?php

class DBConnect
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=pratice_mvc;charset=utf8";
        $this->user = "root";
        $this->password = "tranthidung";
    }

    public function connect() {
        try{
            $db = new PDO($this->dsn,$this->user,$this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db;
        }catch( PDOException $e) {
            echo $e->getMessage();
        }
    }
}
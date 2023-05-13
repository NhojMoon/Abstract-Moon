<?php

// Parental Class
abstract class Database
{
    protected $conn;
    protected $db = "abstract";

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "");
    }

    abstract public function db() : string;
}

// Child Classes
class Data extends Database
{
    public function db() : string
    {
       $data = "CREATE DATABASE IF NOT EXISTS $this->db";
        return $this->conn->query($data);
    }

    public function 
}
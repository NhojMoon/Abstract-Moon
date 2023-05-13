<?php

abstract class Database
{
    protected $conn;
    protected $db = "abstract";

    public function __construct($conn)
    {
        $this->conn = new mysqli("localhost", "root", "");
        $this->conn->query("CREATE DATABASE IF NOT EXISTS $this->db");
        $this->conn = new mysqli("localhost", "root", "", $this->db);
    }

    abstract public function insert() : string;
}

class Brand extends Database
{
    public function insert() : string
    {
        return "This is original quality! I'm a $this->conn";
    }
}
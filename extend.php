<?php

include 'index.php';

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
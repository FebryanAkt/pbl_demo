<?php

require_once "../app/config/database.php";

class Model
{
    protected $db;

    public function __construct()
    {
        global $conn;
        $this->db = $conn;
    }
}

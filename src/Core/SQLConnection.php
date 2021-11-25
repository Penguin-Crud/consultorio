<?php

namespace App\Core;

use PDO;
use PDOException;

class SQLConnection
{
    public $mysql;
    public $user;
    public $pass;

    function __construct()
    {
        $config = new Config();
        $this->user = $config->user;
        $this->pass = $config->pass;
        $host = "localhost";
        $database = "consultorio";
        $charset = "utf-8";
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

        $this->mysql = new PDO("mysql:host={$host};dbname={$database};charset{$charset};", $this->user, $this->pass, $options);
    }
}

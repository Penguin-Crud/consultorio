<?php

namespace App\Core;


class SQLConsultaRepository implements IConsultaRepository
{
    private $connection;
    private $table = 'consultas';

    /* public $tema = 'there are two black birsds thawohif';
    public $consult = 'the gsuau yuauoadf uyeaojf 7ahijeai aujdhcdyud uaiaojy8gae yuashbdfy <yshbayu';
    public $username = 'theyhjisj34';
    public $email = 'yujmxjxj@hjsdk.com';*/

    function __construct()
    {
        $this->connection = (new SQLConnection())->mysql;
    }

    function getAll()
    {
        $query =  $this->connection->query("SELECT * FROM {$this->table}");
        $result = $query->fetchAll();
        return $result;
    }

    public function save($tema, $username, $email, $consult)
    {
        $this->connection->query("INSERT INTO `{$this->table}` (`tema`, `username`, `email`, `consult`)
         VALUES ('{$tema}','{$username}','{$email}' , '{$consult}')");
    }
}

<?php

namespace App\Core;


class SQLConsultaRepository implements IConsultaRepository {
    private $connection;
    private $table = 'consultas';

    function __construct() {
        $this -> connection = (new SQLConnection())-> mysql;
    }

    function getAll() {
        $query =  $this -> connection -> query("SELECT * FROM {$this -> table}");
        $result = $query -> fetchAll();
        return $result;
    }
}
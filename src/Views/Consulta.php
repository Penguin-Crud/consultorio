<?php
require_once __DIR__ . '/Database.php';

class Consulta
{
    public $id;
    public $tema;
    public $problema;
    public $created_at;
    public $username;

    private $db;

    function __construct($data = null)
    {
        if ($data) {
            $this->id = $data['id'];
            $this->tema = $data['tema'];
            $this->problema = $data['problema'];
            $this->created_at = $data['created_at'];
            $this->username = $data['username'];
        }
        $this->db = new Database();
    }
    public function All()
    {
        $consultasList = [];
        foreach ($this->db->getAll() as $elementoConsulta) {
            array_push($consultasList, new self ($elementoConsulta));
        }
        return $consultasList;
    }
}

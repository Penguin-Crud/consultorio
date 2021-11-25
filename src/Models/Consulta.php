<?php
namespace App\Models;
use App\Core\FakeConsultRepository;
use App\Core\IConsultaRepository;
use App\Core\SQLConsultaRepository;

//require_once __DIR__ . '/../Core/FakeConsultRepository.php';

class Consulta
{
    public $id;
    public $tema;
    public $consult;
    public $created_at;
    public $username;
    public $email;

    private IConsultaRepository $db;

    function __construct($data = null)
    {
        if ($data) {
            $this->id = $data['id'];
            $this->tema = $data['tema'];
            $this->consult = $data['consult'];
            $this->created_at = $data['created_at'];
            $this->username = $data['username'];
            $this->email = $data['email'];
        }
        $this->db = new SQLConsultaRepository();
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

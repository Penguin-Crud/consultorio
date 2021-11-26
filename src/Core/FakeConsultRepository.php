<?php
namespace App\Core;

class FakeConsultRepository implements IConsultaRepository
{
    private $consultas = [
        [
            'id' => 1,
            'tema' => 'composer corrupto',
            'consult' => 'file not found',
            'created_at' => '15:00',
            'username' => 'Sergi',
            'email' => 'algo@algo.com',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'consult' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Diego',
            'email' => 'algo@algo.com',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'consult' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Esther',
            'email' => 'algo@algo.com',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'consult' => 'file not found',
            'created_at' => '14:00',
            'username' => 'David',
            'email' => 'algo@algo.com',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'consult' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Feli',
            'email' => 'algo@algo.com',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'consult' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Claudia',
            'email' => 'algo@algo.com',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'consult' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Jaume',
            'email' => 'algo@algo.com',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'consult' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Jura',
            'email' => 'algo@algo.com',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'consult' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Lucas',
            'email' => 'algo@algo.com',

        ],
    ];
    public function getAll()
    {
        return $this->consultas;
    }
}

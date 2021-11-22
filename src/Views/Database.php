<?php

class Database
{
    private $consultas = [
        [
            'id' => 1,
            'tema' => 'composer corrupto',
            'problema' => 'file not found',
            'created_at' => '15:00',
            'username' => 'Sergi',

        ],
        [
            'id' => 2,
            'tema' => 'composer corrupto',
            'problema' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Diego',

        ],
    ];
    public function getAll()
    {
        return $this->consultas;
    }
}

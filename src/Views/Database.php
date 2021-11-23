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
            'tema' => 'node corrupto',
            'problema' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Diego',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'problema' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Esther',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'problema' => 'file not found',
            'created_at' => '14:00',
            'username' => 'David',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'problema' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Feli',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'problema' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Claudia',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'problema' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Jaume',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'problema' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Jura',

        ],
        [
            'id' => 2,
            'tema' => 'node corrupto',
            'problema' => 'file not found',
            'created_at' => '14:00',
            'username' => 'Lucas',

        ],
    ];
    public function getAll()
    {
        return $this->consultas;
    }
}

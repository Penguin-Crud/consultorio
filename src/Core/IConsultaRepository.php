<?php

namespace App\Core;

interface IConsultaRepository
{
    function getAll();
    function save($tema, $username, $email, $consult);
}

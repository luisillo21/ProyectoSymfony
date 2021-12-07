<?php

namespace AppBundle\Services;

class HomeService
{
    public function getUsers()
    {
        $usuarios = [
            ["nombre" => "Luis ardila", "edad" => "23"]
        ];
        return $usuarios;
    }
}

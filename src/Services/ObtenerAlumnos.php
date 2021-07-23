<?php 
namespace App\Services;

use App\Repository\AlumnoRepository;

final class ObtenerAlumnos {
    private $alumnoRepository;
    public function __construct(AlumnoRepository $alumnoRepository)
    {
        $this->alumnoRepository=$alumnoRepository;
    }

    public function dispach():array
    {
        return $this->alumnoRepository->findAll();
    }
}
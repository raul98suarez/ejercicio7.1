<?php 
namespace App\Services;

use App\Repository\AlumnosAsignaturasRepository;

final class Matricular {
    private $alumnosAsignaturasRepository;
    public function __construct(AlumnosAsignaturasRepository $alumnosAsignaturasRepository)
    {
        $this->alumnosAsignaturasRepository=$alumnosAsignaturasRepository;
    }

    public function dispach($asiganturas, $idAlumno)
    {
         $this->alumnosAsignaturasRepository->matricular($asiganturas, $idAlumno);
    }
}
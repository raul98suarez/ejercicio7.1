<?php 
namespace App\Services;

use App\Repository\AlumnosAsignaturasRepository;

final class Desmatricular {
    private $alumnosAsignaturasRepository;
    public function __construct(AlumnosAsignaturasRepository $alumnosAsignaturasRepository)
    {
        $this->alumnosAsignaturasRepository=$alumnosAsignaturasRepository;
    }

    public function dispach($asiganturas, $idAlumno)
    {
         $this->alumnosAsignaturasRepository->desmatricular($asiganturas, $idAlumno);
    }
}
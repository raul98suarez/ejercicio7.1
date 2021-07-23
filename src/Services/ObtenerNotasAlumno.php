<?php 
namespace App\Services;

use App\Repository\NotaRepository;

final class ObtenerNotasAlumno {
    private $notaRepository;
    public function __construct(NotaRepository $notaRepository)
    {
        $this->notaRepository=$notaRepository;
    }

    public function dispach($id):array
    {
        return $this->notaRepository->notasAlumno($id);
    }
}
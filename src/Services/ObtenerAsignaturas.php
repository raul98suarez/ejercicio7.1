<?php 
namespace App\Services;

use App\Repository\AsignaturaRepository;

final class ObtenerAsignaturas {
    private $asignaturaRepository;
    public function __construct(AsignaturaRepository $asignaturaRepository)
    {
        $this->asignaturaRepository=$asignaturaRepository;
    }

    public function dispach():array
    {
        return $this->asignaturaRepository->findAll();
    }
}
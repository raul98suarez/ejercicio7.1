<?php 
namespace App\Services;

use App\Repository\AsignaturaRepository;

final class ObtenerAsignaturasId {
    private $asignaturaRepository;
    public function __construct(AsignaturaRepository $asignaturaRepository)
    {
        $this->asignaturaRepository=$asignaturaRepository;
    }

    public function dispach($id):array
    {
        return $this->asignaturaRepository->findById($id);
    }
}
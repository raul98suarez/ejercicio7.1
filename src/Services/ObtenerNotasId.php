<?php 
namespace App\Services;

use App\Repository\NotaRepository;

final class ObtenerNotasId {
    private $notaRepository;
    public function __construct(NotaRepository $notaRepository)
    {
        $this->notaRepository=$notaRepository;
    }

    public function dispach():array
    {
        return $this->notaRepository->findAll();
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Services\ObtenerAlumnos;

class ListadoAlumnosController extends AbstractController
{
    /**
     * @Route("/", name="listado_alumnos")
     */
    public function index(ObtenerAlumnos $obtenerAlumnos): Response
    {
        dump($obtenerAlumnos->dispach());
        return $this->render('listado_alumnos/index.html.twig', [
          'alumnos'=>$obtenerAlumnos->dispach(),
        ]);
    }
}

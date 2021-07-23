<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Services\ObtenerNotasAlumno;

class AlumnoNotasController extends AbstractController
{
    /**
     * @Route("/alumno_notas/{alumnoId}", name="alumno_notas")
     */
    public function index(string $alumnoId, ObtenerNotasAlumno $ObtenerNotasAlumno): Response
    {
        dump($ObtenerNotasAlumno->dispach($alumnoId));
        return $this->render('alumno_notas/index.html.twig', [
           'notas'=>$ObtenerNotasAlumno->dispach($alumnoId),
        ]);
    }
}

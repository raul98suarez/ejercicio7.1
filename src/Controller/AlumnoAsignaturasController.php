<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use App\Services\ObtenerAsignaturasId;
use App\Services\ObtenerAsignaturas;
use App\Services\Matricular;
use App\Services\Desmatricular;

class AlumnoAsignaturasController extends AbstractController
{
    /**
     * @Route("/alumno_asignaturas/{alumnoId}", name="alumno_asignaturas")
     */
    public function index(string $alumnoId, ObtenerAsignaturasId $obtenerAsignaturasId, ObtenerAsignaturas $obtenerAsignaturas): Response
    {
        return $this->render('alumno_asignaturas/index.html.twig', [
            'alumnoId'=>$alumnoId,
            'asignaturasMatriculadas' => $obtenerAsignaturasId->dispach($alumnoId),
            'asignaturas' => $obtenerAsignaturas->dispach(),
        ]);
    }

    /**
     * @Route("/alumno_asignaturas/matricular/{alumnoId}", name="matricular" , methods={"POST"})
     */
    public function asignaturasMatricular(string $alumnoId,Matricular $matricular): JsonResponse
    {
        $request = Request::createFromGlobals();
        $ids = $request->get("ids");

        $matricular->dispach($ids,$alumnoId);
        return new JsonResponse("ok");
    }

    /**
     * @Route("/alumno_asignaturas/desmatricular/{alumnoId}", name="desMatricular" , methods={"POST"})
     */
    public function asignaturasDesmatricular(string $alumnoId,Desmatricular $desmatricular): JsonResponse
    {
        $request = Request::createFromGlobals();
        $ids = $request->get("ids");
        
        $desmatricular->dispach($ids,$alumnoId);
        return new JsonResponse("ok");
    }
}

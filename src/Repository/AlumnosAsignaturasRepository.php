<?php

namespace App\Repository;

use App\Entity\Alumnos_asignaturas;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Constraints\Length;

/**
 * @method Alumno|null find($id, $lockMode = null, $lockVersion = null)
 * @method Alumno|null findOneBy(array $criteria, array $orderBy = null)
 * @method Alumno[]    findAll()
 * @method Alumno[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlumnosAsignaturasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Alumnos_asignaturas::class);
    }

    public function matricular($asignaturas, $idAlumno)
    {
        $entityManager = $this->getEntityManager();
        if($asignaturas != null){
        foreach ($asignaturas as $asignatura) {
            $alumnoMatriculado = new Alumnos_asignaturas();
            $alumnoMatriculado->setAll($asignatura, $idAlumno);
            $entityManager->persist($alumnoMatriculado);
        }
        $entityManager->flush();
        }
    }
    public function desmatricular($asignaturas, $idAlumno)
    {
        $this->createQueryBuilder('c')
            ->delete()
            ->andwhere('c.asignaturaId in (:asignaturas)')
            ->andWhere('c.alumnoId = :idAlumno')
            ->setParameter(':asignaturas', $asignaturas)
            ->setParameter(':idAlumno', $idAlumno)
            ->getQuery()->execute();

        return true;
    }
}

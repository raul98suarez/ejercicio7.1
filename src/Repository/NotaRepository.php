<?php

namespace App\Repository;

use App\Entity\Nota;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Select;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nota|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nota|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nota[]    findAll()
 * @method Nota[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nota::class);
    }

    public function notasAlumno($id)
    {
        $notasresul = [];
        $notas = $this->createQueryBuilder('n')
            ->andWhere('n.alumno = :val')
            ->orderBy('n.asignatura, n.nConvocatoria', 'DESC')
            ->setParameter('val', $id)
            ->getQuery()
            ->getResult();

        $ultimo = -1;
        foreach ($notas as $nota) {
            if ($nota->getAsignaturaId() != $ultimo) {
                $ultimo = $nota->getAsignaturaId();
                array_push($notasresul, $nota);
            }
        }
        return $notasresul;
    }
}

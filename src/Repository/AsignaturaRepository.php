<?php

namespace App\Repository;

use App\Entity\Asignatura;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Asignatura|null find($id, $lockMode = null, $lockVersion = null)
 * @method Asignatura|null findOneBy(array $criteria, array $orderBy = null)
 * @method Asignatura[]    findAll()
 * @method Asignatura[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsignaturaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Asignatura::class);
    }

    public function findById($id): array
    {
        return $this->createQueryBuilder('a')
            ->select('a.id', 'a.codigo', 'a.nombre', 'a.nombreIngles', 'a.credects')
            ->from('App\Entity\Alumnos_asignaturas', 'o')
            ->andWhere('o.alumnoId = :val')
            ->andWhere('a.id = o.asignaturaId')
            ->setParameter('val', $id)
            ->getQuery()
            ->getResult();
    }
}

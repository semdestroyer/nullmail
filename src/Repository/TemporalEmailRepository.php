<?php

namespace App\Repository;

use App\Entity\TemporalEmail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TemporalEmail|null find($id, $lockMode = null, $lockVersion = null)
 * @method TemporalEmail|null findOneBy(array $criteria, array $orderBy = null)
 * @method TemporalEmail[]    findAll()
 * @method TemporalEmail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TemporalEmailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TemporalEmail::class);
    }

    // /**
    //  * @return TemporalEmail[] Returns an array of TemporalEmail objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TemporalEmail
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

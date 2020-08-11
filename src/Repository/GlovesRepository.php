<?php

namespace App\Repository;

use App\Entity\Gloves;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Gloves|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gloves|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gloves[]    findAll()
 * @method Gloves[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GlovesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gloves::class);
    }

    // /**
    //  * @return Gloves[] Returns an array of Gloves objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Gloves
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

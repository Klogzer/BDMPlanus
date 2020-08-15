<?php

namespace App\Repository;

use App\Entity\ItemGrade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ItemGrade|null find($id, $lockMode = null, $lockVersion = null)
 * @method ItemGrade|null findOneBy(array $criteria, array $orderBy = null)
 * @method ItemGrade[]    findAll()
 * @method ItemGrade[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItemGradeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ItemGrade::class);
    }

    // /**
    //  * @return ItemGrade[] Returns an array of ItemGrade objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ItemGrade
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

<?php

namespace App\Repository;

use App\Entity\SubWeapon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SubWeapon|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubWeapon|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubWeapon[]    findAll()
 * @method SubWeapon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubWeaponRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubWeapon::class);
    }

    // /**
    //  * @return SubWeapon[] Returns an array of SubWeapon objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SubWeapon
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

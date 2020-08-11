<?php

namespace App\Repository;

use App\Entity\CharacterProfession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CharacterProfession|null find($id, $lockMode = null, $lockVersion = null)
 * @method CharacterProfession|null findOneBy(array $criteria, array $orderBy = null)
 * @method CharacterProfession[]    findAll()
 * @method CharacterProfession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CharacterProfessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CharacterProfession::class);
    }

    // /**
    //  * @return CharacterProfession[] Returns an array of CharacterProfession objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CharacterProfession
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

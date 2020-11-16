<?php

namespace App\Repository;

use App\Entity\Naked;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Naked|null find($id, $lockMode = null, $lockVersion = null)
 * @method Naked|null findOneBy(array $criteria, array $orderBy = null)
 * @method Naked[]    findAll()
 * @method Naked[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NakedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Naked::class);
    }

    // /**
    //  * @return Naked[] Returns an array of Naked objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Naked
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

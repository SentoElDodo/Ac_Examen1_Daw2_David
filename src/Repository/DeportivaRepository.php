<?php

namespace App\Repository;

use App\Entity\Deportiva;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Deportiva|null find($id, $lockMode = null, $lockVersion = null)
 * @method Deportiva|null findOneBy(array $criteria, array $orderBy = null)
 * @method Deportiva[]    findAll()
 * @method Deportiva[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeportivaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Deportiva::class);
    }

    // /**
    //  * @return Deportiva[] Returns an array of Deportiva objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Deportiva
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

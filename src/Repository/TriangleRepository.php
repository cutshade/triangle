<?php

namespace App\Repository;

use App\Entity\Triangle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Triangle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Triangle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Triangle[]    findAll()
 * @method Triangle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TriangleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Triangle::class);
    }

    public function create(Triangle $triangle)
    {
        $this->getEntityManager()->persist($triangle);
        $this->getEntityManager()->flush();
    }

    // /**
    //  * @return Triangle[] Returns an array of Triangle objects
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
    public function findOneBySomeField($value): ?Triangle
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
<?php

namespace App\Repository;

use App\Entity\Offre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Offre>
 */
class OffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offre::class);
    }

    //    /**
    //     * @return Offre[] Returns an array of Offre objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('o.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Offre
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }


    // Dans App\Repository\OffreRepository

public function findBySearchTerm(string $searchTerm): array
{
    return $this->createQueryBuilder('o')
        ->where('o.description_offre LIKE :term')
        ->orWhere('o.id_event = :id')
        ->orWhere('o.prix_offre = :price')
        ->setParameter('term', '%'.$searchTerm.'%')
        ->setParameter('id', is_numeric($searchTerm) ? (int)$searchTerm : 0)
        ->setParameter('price', is_numeric($searchTerm) ? (float)$searchTerm : 0)
        ->orderBy('o.id', 'ASC')
        ->getQuery()
        ->getResult();
}
}

<?php

namespace App\Repository;

use App\Entity\Trajet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Trajet>
 *
 * @method Trajet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trajet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trajet[]    findAll()
 * @method Trajet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrajetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trajet::class);
    }

//    /**
//     * @return Trajet[] Returns an array of Trajet objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Trajet
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function findBySearchCriteria(?string $departure, ?string $destination): array
{
    $qb = $this->createQueryBuilder('t');

    if ($departure) {
        $qb->andWhere('t.departure LIKE :departure')
           ->setParameter('departure', '%' . $departure . '%');
    }

    if ($destination) {
        $qb->andWhere('t.destination LIKE :destination')
           ->setParameter('destination', '%' . $destination . '%');
    }

    return $qb->orderBy('t.id', 'DESC')
              ->getQuery()
              ->getResult();
}
// src/Repository/TrajetRepository.php

public function countByDeparture(): array
{
    return $this->createQueryBuilder('t')
        ->select('t.departure AS label, COUNT(t.id) AS count')
        ->groupBy('t.departure')
        ->getQuery()
        ->getResult();
}

public function countByDestination(): array
{
    return $this->createQueryBuilder('t')
        ->select('t.destination AS label, COUNT(t.id) AS count')
        ->groupBy('t.destination')
        ->getQuery()
        ->getResult();
}



}

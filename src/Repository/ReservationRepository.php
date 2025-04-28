<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    /**
     * @return Reservation[] Returns an array of Reservation objects by user id
     */
    public function findByUserId(int $userId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.id_user = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('r.date_reservation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Reservation[] Returns an array of Reservation objects for a specific offer
     */
    public function findByOffreId(int $offreId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.offre = :offreId')
            ->setParameter('offreId', $offreId)
            ->orderBy('r.date_reservation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find one reservation by its ID
     */
    public function findOneByIdReservation(int $idReservation): ?Reservation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.id_reservation = :id')
            ->setParameter('id', $idReservation)
            ->getQuery()
            ->getOneOrNullResult();
    }
}

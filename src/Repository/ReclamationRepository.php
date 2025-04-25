<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

//    /**
//     * @return Reclamation[] Returns an array of Reclamation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reclamation
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function getStatistiquesParCategorie()
{
    // Créer une requête pour récupérer le nombre de réclamations par catégorie
    return $this->createQueryBuilder('r')
        ->select('r.categorie, COUNT(r.id_reclamation) AS total')
        ->groupBy('r.categorie')
        ->orderBy('total', 'DESC')  // Optionnel, pour trier par nombre décroissant
        ->getQuery()
        ->getResult();
}



public function searchByNomOrEmail(string $search): array
{
    return $this->createQueryBuilder('r')
        ->where('LOWER(r.nom_utilisateur) LIKE :search')
        ->orWhere('LOWER(r.email) LIKE :search')
        ->setParameter('search', '%' . strtolower($search) . '%')
        
        ->getQuery()
        ->getResult();
}




public function findOldNonRepondu(\DateTimeInterface $limitDate): array
{
    return $this->createQueryBuilder('r')
        ->andWhere('r.statut = :statut')
        ->andWhere('r.createdAt <= :limitDate')
        ->setParameter('statut', 'non_repondu')
        ->setParameter('limitDate', $limitDate)
        ->getQuery()
        ->getResult();
}




}

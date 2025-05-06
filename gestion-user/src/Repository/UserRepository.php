<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Search users by term (name, email, phone, etc.)
     * 
     * @param string $term The search term
     * @return User[] Returns an array of User objects
     */
    public function findBySearchTerm(string $term): array
    {
        $term = '%' . strtolower($term) . '%';

        $dql = "SELECT u FROM App\Entity\User u 
                WHERE LOWER(u.nom) LIKE :term 
                OR LOWER(u.prenom) LIKE :term 
                OR LOWER(u.email) LIKE :term 
                OR LOWER(u.numtlf) LIKE :term";

        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('term', $term);

        return $query->getResult();
    }

    /**
     * Search users with advanced filtering
     * 
     * @param string $term The search term
     * @param array $filters Additional filters (role, status, etc.)
     * @return User[] Returns an array of User objects
     */
    public function findByAdvancedSearch(string $term, array $filters = []): array
    {
        $term = '%' . strtolower($term) . '%';
        
        $qb = $this->createQueryBuilder('u');
        $qb->where('1=1');
        $qb->andWhere('LOWER(u.nom) LIKE :term 
                      OR LOWER(u.prenom) LIKE :term 
                      OR LOWER(u.email) LIKE :term 
                      OR LOWER(u.numtlf) LIKE :term');
        $qb->setParameter('term', $term);

        // Role filter
        if (isset($filters['role'])) {
            $qb->andWhere('u.roles LIKE :role');
            $qb->setParameter('role', '%' . $filters['role'] . '%');
        }

        // Status filter (banned/active)
        if (isset($filters['status'])) {
            if ($filters['status'] === 'banned') {
                $qb->andWhere('u.roles LIKE :bannedRole');
                $qb->setParameter('bannedRole', '%ROLE_BANNED%');
            } else {
                $qb->andWhere('u.roles NOT LIKE :bannedRole');
                $qb->setParameter('bannedRole', '%ROLE_BANNED%');
            }
        }

        // Age range filter
        if (isset($filters['minAge'])) {
            $qb->andWhere('u.age >= :minAge');
            $qb->setParameter('minAge', $filters['minAge']);
        }
        if (isset($filters['maxAge'])) {
            $qb->andWhere('u.age <= :maxAge');
            $qb->setParameter('maxAge', $filters['maxAge']);
        }

        // Order by
        $qb->orderBy('u.nom', 'ASC');
        $qb->addOrderBy('u.prenom', 'ASC');

        return $qb->getQuery()->getResult();
    }
} 
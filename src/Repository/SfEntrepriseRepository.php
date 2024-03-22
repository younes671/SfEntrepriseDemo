<?php

namespace App\Repository;

use App\Entity\SfEntreprise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SfEntreprise>
 *
 * @method SfEntreprise|null find($id, $lockMode = null, $lockVersion = null)
 * @method SfEntreprise|null findOneBy(array $criteria, array $orderBy = null)
 * @method SfEntreprise[]    findAll()
 * @method SfEntreprise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SfEntrepriseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SfEntreprise::class);
    }

    //    /**
    //     * @return SfEntreprise[] Returns an array of SfEntreprise objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?SfEntreprise
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

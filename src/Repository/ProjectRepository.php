<?php

namespace App\Repository;

use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class ProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Project::class);
    }

    public function findLastProject()
    {
        $qb = $this->getEntityManager()->createQueryBuilder();

		$qb->select(array('p'))
            ->from('App\Entity\Project', 'p')
            ->orderBy('p.id', 'DESC');

        return $qb->getQuery()->setMaxResults(3)->getResult();
    }
}

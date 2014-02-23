<?php

namespace MyWeb\SiteBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EnquiryRepository extends EntityRepository
{
    public function searchForEmail($email)
    {
        $qb = $this->createQueryBuilder('e');
        $qb->where(
                $qb->expr()->like('e.email', ':email')
            )
            ->setParameter('email',"%$email%")
            ->orderBy('e.email', 'asc');

        $query = $qb->getQuery();

        return $query;
    }
} 
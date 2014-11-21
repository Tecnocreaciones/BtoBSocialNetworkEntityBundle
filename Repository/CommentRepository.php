<?php

namespace BtoB\SocialNetwork\EntityBundle\Repository;

use BtoB\SocialNetwork\CoreBundle\Doctrine\ORM\EntityRepository;

/**
 * Repositorio de los comentarios
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentRepository extends EntityRepository
{
    public function findByMessage(\BtoB\SocialNetwork\EntityBundle\Entity\Message $message) 
    {
        $qb = $this->getQueryBuilder();
        $qb->select("c")
           ->innerJoin('c.message', 'm')
           ->andWhere('m.id = :message')
           ->setParameter("message",$message) 
            ;
        return $this->getPaginator($qb);
    }
    
    protected function getAlias() {
        return "c";
    }
}
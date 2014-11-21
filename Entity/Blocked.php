<?php

namespace BtoB\SocialNetwork\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blocked
 *
 * @ORM\Table(name="blocked")
 * @ORM\Entity
 */
class Blocked
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \BtoB\SocialNetwork\EntityBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="BtoB\SocialNetwork\EntityBundle\Entity\User")
     * @ORM\JoinColumn(name="uid",referencedColumnName="idu",nullable=false)
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="by", type="integer", nullable=false)
     */
    private $by;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set by
     *
     * @param integer $by
     * @return Blocked
     */
    public function setBy($by)
    {
        $this->by = $by;

        return $this;
    }

    /**
     * Get by
     *
     * @return integer 
     */
    public function getBy()
    {
        return $this->by;
    }

    /**
     * Set user
     *
     * @param \BtoB\SocialNetwork\EntityBundle\Entity\User $user
     * @return Blocked
     */
    public function setUser(\BtoB\SocialNetwork\EntityBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BtoB\SocialNetwork\EntityBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}

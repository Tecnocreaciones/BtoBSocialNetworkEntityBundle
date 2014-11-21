<?php

namespace BtoB\SocialNetwork\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table(name="album")
 * @ORM\Entity
 */
class Album
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=256, nullable=false)
     */
    private $descripcion;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Album
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set user
     *
     * @param \BtoB\SocialNetwork\EntityBundle\Entity\User $user
     * @return Album
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
    
    public function __toString() {
        return $this->descripcion;;
    }
}

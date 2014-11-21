<?php

namespace BtoB\SocialNetwork\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Like
 *
 * @ORM\Table(name="likes")
 * @ORM\Entity(repositoryClass="BtoB\SocialNetwork\EntityBundle\Repository\LikeRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Like
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
     * @ORM\ManyToOne(targetEntity="BtoB\SocialNetwork\EntityBundle\Entity\User",inversedBy="likes")
     * @ORM\JoinColumn(name="`by`",referencedColumnName="idu",nullable=false)
     */
    private $byUser;

    /**
     *
     * @var \BtoB\SocialNetwork\EntityBundle\Entity\Message
     * @ORM\ManyToOne(targetEntity="BtoB\SocialNetwork\EntityBundle\Entity\Message",inversedBy="likes")
     * @ORM\JoinColumn(name="`post`",referencedColumnName="id",nullable=false)
     */
    private $message;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="`time`", type="datetime", nullable=false)
     */
    private $time;
    
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
     * Set time
     *
     * @ORM\PrePersist
     * @param \DateTime $time
     * @return Message
     */
    public function setTime()
    {
        
        $this->time = new \DateTime();

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set byUser
     *
     * @param \BtoB\SocialNetwork\EntityBundle\Entity\User $byUser
     * @return Like
     */
    public function setByUser(\BtoB\SocialNetwork\EntityBundle\Entity\User $byUser)
    {
        $this->byUser = $byUser;

        return $this;
    }

    /**
     * Get byUser
     *
     * @return \BtoB\SocialNetwork\EntityBundle\Entity\User 
     */
    public function getByUser()
    {
        return $this->byUser;
    }

    /**
     * Set message
     *
     * @param \BtoB\SocialNetwork\EntityBundle\Entity\Message $message
     * @return Like
     */
    public function setMessage(\BtoB\SocialNetwork\EntityBundle\Entity\Message $message)
    {
        $message->addLike($this);
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return \BtoB\SocialNetwork\EntityBundle\Entity\Message 
     */
    public function getMessage()
    {
        return $this->message;
    }
}

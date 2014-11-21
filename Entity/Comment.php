<?php

namespace BtoB\SocialNetwork\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentario
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="BtoB\SocialNetwork\EntityBundle\Repository\CommentRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Comment
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
    private $byUser;

    /**
     * @var \BtoB\SocialNetwork\EntityBundle\Entity\Message
     *
     * @ORM\ManyToOne(targetEntity="BtoB\SocialNetwork\EntityBundle\Entity\Message",inversedBy="comments")
     * @ORM\JoinColumn(name="mid",referencedColumnName="id",nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $commentText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime", nullable=false)
     */
    private $time;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="likes", type="integer", nullable=false)
     */
    private $likes = 0;

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
     * Set commentText
     *
     * @param string $commentText
     * @return Comment
     */
    public function setCommentText($commentText)
    {
        $this->commentText = $commentText;

        return $this;
    }

    /**
     * Get commentText
     *
     * @return string 
     */
    public function getCommentText()
    {
        return $this->commentText;
    }

    /**
     * Set likes
     *
     * @param integer $likes
     * @return Comment
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes
     *
     * @return integer 
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set byUser
     *
     * @param \BtoB\SocialNetwork\EntityBundle\Entity\User $byUser
     * @return Comment
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
     * @return Comment
     */
    public function setMessage(\BtoB\SocialNetwork\EntityBundle\Entity\Message $message)
    {
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

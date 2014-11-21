<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BtoB\SocialNetwork\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BtoB\SocialNetwork\EntityBundle\Model\ResourceCDN as Base;

/**
 * Recurso en cdn
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 * 
 * @ORM\Table(name="resourceCdn")
 * @ORM\Entity(repositoryClass="BtoB\SocialNetwork\EntityBundle\Repository\ResourceCDN")
 * @ORM\HasLifecycleCallbacks()
 */
class ResourceCDN extends Base
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
     * Nombre o id del recurso
     * 
     * @var string
     * @ORM\Column(name="name",type="string",length=250)
     */
    private $name;
    
    /**
     * Datos del cdn
     * @var array
     * @ORM\Column(name="data",type="array")
     */
    protected $data;
    
    /**
     * Tipo de CDN
     * @var integer
     * @ORM\Column(name="type",type="string",length=30)
     */
    private $type = self::TYPE_CLOUDINARY;

    /**
     * @var \BtoB\SocialNetwork\EntityBundle\Entity\Message
     *
     * @ORM\ManyToOne(targetEntity="BtoB\SocialNetwork\EntityBundle\Entity\Message",inversedBy="resourcesCDN")
     * @ORM\JoinColumn(referencedColumnName="id",nullable=false)
     */
    private $message;
    
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
     * Set data
     *
     * @param array $data
     * @return ResourceCDN
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return array 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return ResourceCDN
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set message
     *
     * @param \BtoB\SocialNetwork\EntityBundle\Entity\Message $message
     * @return ResourceCDN
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

    /**
     * Set name
     *
     * @param string $name
     * @return ResourceCDN
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}

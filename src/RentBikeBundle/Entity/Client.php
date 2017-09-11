<?php

namespace RentBikeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="RentBikeBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\Column(type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $entrydate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $lastupdate;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=100, nullable = true)
     */
    private $secondname;

    /**
     * @ORM\Column(type="string", length=100, nullable = true)
     */
    private $secondlastname;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $password;

    /**
     * @ORM\Column(name="fullname", type="string", length=255)
     */
    private $fullname;

    /**
     * @ORM\Column(name="identificationNumber", type="string", length=255)
     */
    private $identificationNumber;
    
    /**
     * @ORM\ManyToOne(targetEntity="RentBikeBundle\Entity\AttributeList",cascade={"persist"})
     * @ORM\JoinColumn(name="identificationType_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank()
     */
    private $identificationType;

    public function __construct()
    {
        $this->entrydate = new \DateTime();
        $this->lastupdate = new \DateTime();
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist(){
        $this->entrydate = new \DateTime();
        $this->lastupdate = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate(){
        $this->lastupdate = new \DateTime();
    }


}

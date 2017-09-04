<?php

namespace RentBikeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="RentBikeBundle\Repository\UserRepository")
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
    private $firstaname;

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



    /**
     * Get id
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return Client
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set identificationNumber
     *
     * @param string $identificationNumber
     *
     * @return Client
     */
    public function setIdentificationNumber($identificationNumber)
    {
        $this->identificationNumber = $identificationNumber;

        return $this;
    }

    /**
     * Get identificationNumber
     *
     * @return string
     */
    public function getIdentificationNumber()
    {
        return $this->identificationNumber;
    }

    /**
     * Set identificationType
     *
     * @param \RentBikeBundle\Entity\AttributeList $identificationType
     *
     * @return Client
     */
    public function setIdentificationType(\RentBikeBundle\Entity\AttributeList $identificationType)
    {
        $this->identificationType = $identificationType;

        return $this;
    }

    /**
     * Get identificationType
     *
     * @return \RentBikeBundle\Entity\AttributeList
     */
    public function getIdentificationType()
    {
        return $this->identificationType;
    }

    /**
     * Set entrydate
     *
     * @param \DateTime $entrydate
     *
     * @return Client
     */
    public function setEntrydate($entrydate)
    {
        $this->entrydate = $entrydate;

        return $this;
    }

    /**
     * Get entrydate
     *
     * @return \DateTime
     */
    public function getEntrydate()
    {
        return $this->entrydate;
    }

    /**
     * Set lastupdate
     *
     * @param \DateTime $lastupdate
     *
     * @return Client
     */
    public function setLastupdate($lastupdate)
    {
        $this->lastupdate = $lastupdate;

        return $this;
    }

    /**
     * Get lastupdate
     *
     * @return \DateTime
     */
    public function getLastupdate()
    {
        return $this->lastupdate;
    }

    /**
     * Set firstaname
     *
     * @param string $firstaname
     *
     * @return Client
     */
    public function setFirstaname($firstaname)
    {
        $this->firstaname = $firstaname;

        return $this;
    }

    /**
     * Get firstaname
     *
     * @return string
     */
    public function getFirstaname()
    {
        return $this->firstaname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Client
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set secondname
     *
     * @param string $secondname
     *
     * @return Client
     */
    public function setSecondname($secondname)
    {
        $this->secondname = $secondname;

        return $this;
    }

    /**
     * Get secondname
     *
     * @return string
     */
    public function getSecondname()
    {
        return $this->secondname;
    }

    /**
     * Set secondlastname
     *
     * @param string $secondlastname
     *
     * @return Client
     */
    public function setSecondlastname($secondlastname)
    {
        $this->secondlastname = $secondlastname;

        return $this;
    }

    /**
     * Get secondlastname
     *
     * @return string
     */
    public function getSecondlastname()
    {
        return $this->secondlastname;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
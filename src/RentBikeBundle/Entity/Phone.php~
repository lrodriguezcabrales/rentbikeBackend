<?php

namespace RentBikeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Phone
 * @ORM\Entity
 * @ORM\Table(name="phone")
 */
class Phone
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
    private $number;

    /**
     * @ORM\ManyToOne(targetEntity="RentBikeBundle\Entity\AttributeList",cascade={"persist"})
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank()
     */
    private $type;

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
     * Set entrydate
     *
     * @param \DateTime $entrydate
     *
     * @return Phone
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
     * @return Phone
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
     * Set fullAddress
     *
     * @param \number $fullAddress
     *
     * @return Phone
     */
    public function setFullAddress(\number $fullAddress)
    {
        $this->fullAddress = $fullAddress;

        return $this;
    }

    /**
     * Get fullAddress
     *
     * @return \number
     */
    public function getFullAddress()
    {
        return $this->fullAddress;
    }

    /**
     * Set type
     *
     * @param \RentBikeBundle\Entity\AttributeList $type
     *
     * @return Phone
     */
    public function setType(\RentBikeBundle\Entity\AttributeList $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \RentBikeBundle\Entity\AttributeList
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }
}

<?php

namespace RentBikeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Address
 * @ORM\Entity
 * @ORM\Table(name="address")
 */
class Address
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
    private $fullAddress;

    /**
     * @ORM\ManyToOne(targetEntity="RentBikeBundle\Entity\Country",cascade={"persist"})
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank()
     */
    private $country;

    /**
     * @ORM\ManyToOne(targetEntity="RentBikeBundle\Entity\Department",cascade={"persist"})
     * @ORM\JoinColumn(name="department_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank()
     */
    private $department;

    /**
     * @ORM\ManyToOne(targetEntity="RentBikeBundle\Entity\City",cascade={"persist"})
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank()
     */
    private $city;

    /**
     * @ORM\ManyToOne(targetEntity="RentBikeBundle\Entity\neighborhood",cascade={"persist"})
     * @ORM\JoinColumn(name="neighborhood_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank()
     */
    private $neighborhood;

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
     * @return Address
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
     * @return Address
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
     * @param string $fullAddress
     *
     * @return Address
     */
    public function setFullAddress($fullAddress)
    {
        $this->fullAddress = $fullAddress;

        return $this;
    }

    /**
     * Get fullAddress
     *
     * @return string
     */
    public function getFullAddress()
    {
        return $this->fullAddress;
    }

    /**
     * Set country
     *
     * @param \RentBikeBundle\Entity\Country $country
     *
     * @return Address
     */
    public function setCountry(\RentBikeBundle\Entity\Country $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \RentBikeBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set department
     *
     * @param \RentBikeBundle\Entity\Department $department
     *
     * @return Address
     */
    public function setDepartment(\RentBikeBundle\Entity\Department $department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return \RentBikeBundle\Entity\Department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set city
     *
     * @param \RentBikeBundle\Entity\City $city
     *
     * @return Address
     */
    public function setCity(\RentBikeBundle\Entity\City $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \RentBikeBundle\Entity\City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set neighborhood
     *
     * @param \RentBikeBundle\Entity\neighborhood $neighborhood
     *
     * @return Address
     */
    public function setNeighborhood(\RentBikeBundle\Entity\neighborhood $neighborhood)
    {
        $this->neighborhood = $neighborhood;

        return $this;
    }

    /**
     * Get neighborhood
     *
     * @return \RentBikeBundle\Entity\neighborhood
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }
}

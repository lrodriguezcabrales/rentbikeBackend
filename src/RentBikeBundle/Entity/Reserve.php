<?php

namespace RentBikeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reserve
 * @ORM\Entity
 * @ORM\Table(name="reserve")
 */
class Reserve
{
    /**
     * @ORM\Column(type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $code;

    /**
     * @ORM\Column(type="datetime")
     */
    private $entrydate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $lastupdate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endDate;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $numItems;

    /**
     * @ORM\Column(type="float", length=100)
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="RentBikeBundle\Entity\Client",cascade={"persist"})
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank()
     */
    private $client;

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="RentBikeBundle\Entity\Vehicle", inversedBy="reserves")
     * @ORM\JoinTable(name="vehicle_reserve")
     */
    private $vehicles;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vehicles = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set code
     *
     * @param integer $code
     *
     * @return Reserve
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set entrydate
     *
     * @param \DateTime $entrydate
     *
     * @return Reserve
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
     * @return Reserve
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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Reserve
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Reserve
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set numItems
     *
     * @param string $numItems
     *
     * @return Reserve
     */
    public function setNumItems($numItems)
    {
        $this->numItems = $numItems;

        return $this;
    }

    /**
     * Get numItems
     *
     * @return string
     */
    public function getNumItems()
    {
        return $this->numItems;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Reserve
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set client
     *
     * @param \RentBikeBundle\Entity\Client $client
     *
     * @return Reserve
     */
    public function setClient(\RentBikeBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \RentBikeBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Add vehicle
     *
     * @param \RentBikeBundle\Entity\Vehicle $vehicle
     *
     * @return Reserve
     */
    public function addVehicle(\RentBikeBundle\Entity\Vehicle $vehicle)
    {
        $this->vehicles[] = $vehicle;

        return $this;
    }

    /**
     * Remove vehicle
     *
     * @param \RentBikeBundle\Entity\Vehicle $vehicle
     */
    public function removeVehicle(\RentBikeBundle\Entity\Vehicle $vehicle)
    {
        $this->vehicles->removeElement($vehicle);
    }

    /**
     * Get vehicles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }
}

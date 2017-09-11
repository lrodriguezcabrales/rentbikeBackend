<?php

namespace RentBikeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Vehicle
 * @ORM\Entity
 * @ORM\Table(name="vehicle")
 */
class Vehicle
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
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $amount;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $numAvailable;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $numBusy;

    /**
     * @ORM\Column(type="float", length=100)
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="RentBikeBundle\Entity\AttributeList",cascade={"persist"})
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank()
     */
    private $state;

    /**
     * Many Groups have Many Users.
     * @ORM\ManyToMany(targetEntity="RentBikeBundle\Entity\Reserve", mappedBy="vehicles")
     */
    private $reserves;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reserves = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Vehicle
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
     * @return Vehicle
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
     * @return Vehicle
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
     * Set name
     *
     * @param string $name
     *
     * @return Vehicle
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Vehicle
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return Vehicle
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set numAvailable
     *
     * @param string $numAvailable
     *
     * @return Vehicle
     */
    public function setNumAvailable($numAvailable)
    {
        $this->numAvailable = $numAvailable;

        return $this;
    }

    /**
     * Get numAvailable
     *
     * @return string
     */
    public function getNumAvailable()
    {
        return $this->numAvailable;
    }

    /**
     * Set numBusy
     *
     * @param string $numBusy
     *
     * @return Vehicle
     */
    public function setNumBusy($numBusy)
    {
        $this->numBusy = $numBusy;

        return $this;
    }

    /**
     * Get numBusy
     *
     * @return string
     */
    public function getNumBusy()
    {
        return $this->numBusy;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Vehicle
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
     * Set state
     *
     * @param \RentBikeBundle\Entity\AttributeList $state
     *
     * @return Vehicle
     */
    public function setState(\RentBikeBundle\Entity\AttributeList $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \RentBikeBundle\Entity\AttributeList
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Add reserf
     *
     * @param \RentBikeBundle\Entity\Reserve $reserf
     *
     * @return Vehicle
     */
    public function addReserf(\RentBikeBundle\Entity\Reserve $reserf)
    {
        $this->reserves[] = $reserf;

        return $this;
    }

    /**
     * Remove reserf
     *
     * @param \RentBikeBundle\Entity\Reserve $reserf
     */
    public function removeReserf(\RentBikeBundle\Entity\Reserve $reserf)
    {
        $this->reserves->removeElement($reserf);
    }

    /**
     * Get reserves
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReserves()
    {
        return $this->reserves;
    }
}

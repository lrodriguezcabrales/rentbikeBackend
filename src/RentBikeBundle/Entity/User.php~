<?php

namespace RentBikeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
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
     * @return User
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
     * @return User
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
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
     * @return User
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
     * @return User
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
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
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

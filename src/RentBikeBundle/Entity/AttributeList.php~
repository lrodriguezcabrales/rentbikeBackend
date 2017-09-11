<?php

namespace RentBikeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AttributeList
 * @ORM\Entity
 * @ORM\Table(name="attributelist")
 */
class AttributeList
{
    /**
     * @ORM\Column(type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Length(max=50)
     * @Assert\NotBlank()
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Length(max=50)
     * @Assert\NotBlank()
     */
    private $attributeName;

    /**
     * @ORM\Column(type="string", nullable=true, length=1000)
     * @Assert\Length(max=1000)
     */
    private $value;

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
     * Set content
     *
     * @param string $content
     *
     * @return AttributeList
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set attributeName
     *
     * @param string $attributeName
     *
     * @return AttributeList
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * Get attributeName
     *
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return AttributeList
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}

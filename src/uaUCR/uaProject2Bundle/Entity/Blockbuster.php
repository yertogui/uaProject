<?php

namespace uaUCR\uaProject2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blockbuster
 *
 * @ORM\Table(name="blockbuster", uniqueConstraints={@ORM\UniqueConstraint(name=" postalCode", columns={" postalCode"})})
 * @ORM\Entity
 */
class Blockbuster
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
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=1000, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name=" postalCode", type="string", length=600, nullable=false)
     */
    private $postalcode;



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
     * Set location
     *
     * @param string $location
     * @return Blockbuster
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set postalcode
     *
     * @param string $postalcode
     * @return Blockbuster
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    /**
     * Get postalcode
     *
     * @return string 
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }
}

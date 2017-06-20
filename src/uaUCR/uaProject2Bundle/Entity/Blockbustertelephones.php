<?php

namespace uaUCR\uaProject2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blockbustertelephones
 *
 * @ORM\Table(name="blockbustertelephones")
 * @ORM\Entity
 */
class Blockbustertelephones
{
    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10, nullable=false)
     */
    private $telephone;

    /**
     * @var \Blockbuster
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Blockbuster")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;



    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Blockbustertelephones
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set id
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Blockbuster $id
     * @return Blockbustertelephones
     */
    public function setId(\uaUCR\uaProject2Bundle\Entity\Blockbuster $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \uaUCR\uaProject2Bundle\Entity\Blockbuster 
     */
    public function getId()
    {
        return $this->id;
    }
}

<?php

namespace uaUCR\uaProject2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blockbusteremails
 *
 * @ORM\Table(name="blockbusteremails", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"})})
 * @ORM\Entity
 */
class Blockbusteremails
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

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
     * Set email
     *
     * @param string $email
     * @return Blockbusteremails
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
     * Set id
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Blockbuster $id
     * @return Blockbusteremails
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

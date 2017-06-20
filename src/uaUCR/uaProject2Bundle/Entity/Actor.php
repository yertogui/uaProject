<?php

namespace uaUCR\uaProject2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actor
 *
 * @ORM\Table(name="actor")
 * @ORM\Entity
 */
class Actor
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
     * @ORM\Column(name="name", type="string", length=13, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=13, nullable=true)
     */
    private $lastname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Movie", inversedBy="idactor")
     * @ORM\JoinTable(name="movie_actor",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idActor", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="codMovie", referencedColumnName="codMovie")
     *   }
     * )
     */
    private $codmovie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codmovie = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     * @return Actor
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
     * Set lastname
     *
     * @param string $lastname
     * @return Actor
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
     * Add codmovie
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Movie $codmovie
     * @return Actor
     */
    public function addCodmovie(\uaUCR\uaProject2Bundle\Entity\Movie $codmovie)
    {
        $this->codmovie[] = $codmovie;

        return $this;
    }

    /**
     * Remove codmovie
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Movie $codmovie
     */
    public function removeCodmovie(\uaUCR\uaProject2Bundle\Entity\Movie $codmovie)
    {
        $this->codmovie->removeElement($codmovie);
    }

    /**
     * Get codmovie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodmovie()
    {
        return $this->codmovie;
    }
}

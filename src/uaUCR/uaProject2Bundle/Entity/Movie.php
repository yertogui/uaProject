<?php

namespace uaUCR\uaProject2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table(name="movie", indexes={@ORM\Index(name="fk_codGender", columns={"codGender"})})
 * @ORM\Entity
 */
class Movie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codMovie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codmovie;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=29, nullable=true)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="subtitled", type="boolean", nullable=true)
     */
    private $subtitled = 'b\'0\'';

    /**
     * @var boolean
     *
     * @ORM\Column(name="premiere", type="boolean", nullable=true)
     */
    private $premiere;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="runningTime", type="integer", nullable=true)
     */
    private $runningtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var \Gender
     *
     * @ORM\ManyToOne(targetEntity="Gender")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codGender", referencedColumnName="code")
     * })
     */
    private $codgender;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Actor", mappedBy="codmovie")
     */
    private $idactor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Customer", mappedBy="codmovie")
     */
    private $idcustomer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idactor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idcustomer = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get codmovie
     *
     * @return integer 
     */
    public function getCodmovie()
    {
        return $this->codmovie;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Movie
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Movie
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set subtitled
     *
     * @param boolean $subtitled
     * @return Movie
     */
    public function setSubtitled($subtitled)
    {
        $this->subtitled = $subtitled;

        return $this;
    }

    /**
     * Get subtitled
     *
     * @return boolean 
     */
    public function getSubtitled()
    {
        return $this->subtitled;
    }

    /**
     * Set premiere
     *
     * @param boolean $premiere
     * @return Movie
     */
    public function setPremiere($premiere)
    {
        $this->premiere = $premiere;

        return $this;
    }

    /**
     * Get premiere
     *
     * @return boolean 
     */
    public function getPremiere()
    {
        return $this->premiere;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return Movie
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Movie
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
     * Set runningtime
     *
     * @param integer $runningtime
     * @return Movie
     */
    public function setRunningtime($runningtime)
    {
        $this->runningtime = $runningtime;

        return $this;
    }

    /**
     * Get runningtime
     *
     * @return integer 
     */
    public function getRunningtime()
    {
        return $this->runningtime;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Movie
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set codgender
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Gender $codgender
     * @return Movie
     */
    public function setCodgender(\uaUCR\uaProject2Bundle\Entity\Gender $codgender = null)
    {
        $this->codgender = $codgender;

        return $this;
    }

    /**
     * Get codgender
     *
     * @return \uaUCR\uaProject2Bundle\Entity\Gender 
     */
    public function getCodgender()
    {
        return $this->codgender;
    }

    /**
     * Add idactor
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Actor $idactor
     * @return Movie
     */
    public function addIdactor(\uaUCR\uaProject2Bundle\Entity\Actor $idactor)
    {
        $this->idactor[] = $idactor;

        return $this;
    }

    /**
     * Remove idactor
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Actor $idactor
     */
    public function removeIdactor(\uaUCR\uaProject2Bundle\Entity\Actor $idactor)
    {
        $this->idactor->removeElement($idactor);
    }

    /**
     * Get idactor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdactor()
    {
        return $this->idactor;
    }

    /**
     * Add idcustomer
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Customer $idcustomer
     * @return Movie
     */
    public function addIdcustomer(\uaUCR\uaProject2Bundle\Entity\Customer $idcustomer)
    {
        $this->idcustomer[] = $idcustomer;

        return $this;
    }

    /**
     * Remove idcustomer
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Customer $idcustomer
     */
    public function removeIdcustomer(\uaUCR\uaProject2Bundle\Entity\Customer $idcustomer)
    {
        $this->idcustomer->removeElement($idcustomer);
    }

    /**
     * Get idcustomer
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdcustomer()
    {
        return $this->idcustomer;
    }
}

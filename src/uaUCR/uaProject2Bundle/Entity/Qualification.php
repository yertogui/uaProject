<?php

namespace uaUCR\uaProject2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qualification
 *
 * @ORM\Table(name="qualification")
 * @ORM\Entity
 */
class Qualification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="stars", type="integer", nullable=false)
     */
    private $stars;

    /**
     * @var \Movie
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Movie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codMovie", referencedColumnName="codMovie")
     * })
     */
    private $codmovie;



    /**
     * Set stars
     *
     * @param integer $stars
     * @return Qualification
     */
    public function setStars($stars)
    {
        $this->stars = $stars;

        return $this;
    }

    /**
     * Get stars
     *
     * @return integer 
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Set codmovie
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Movie $codmovie
     * @return Qualification
     */
    public function setCodmovie(\uaUCR\uaProject2Bundle\Entity\Movie $codmovie)
    {
        $this->codmovie = $codmovie;

        return $this;
    }

    /**
     * Get codmovie
     *
     * @return \uaUCR\uaProject2Bundle\Entity\Movie 
     */
    public function getCodmovie()
    {
        return $this->codmovie;
    }
}

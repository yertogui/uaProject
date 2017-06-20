<?php

namespace uaUCR\uaProject2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 *
 * @ORM\Table(name="cart", indexes={@ORM\Index(name="codMovie", columns={"codMovie"}), @ORM\Index(name="idCustomer", columns={"idCustomer"})})
 * @ORM\Entity
 */
class Cart
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCart", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcart;

    /**
     * @var \Customer
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCustomer", referencedColumnName="idCustomer")
     * })
     */
    private $idcustomer;

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
     * Set idcart
     *
     * @param integer $idcart
     * @return Cart
     */
    public function setIdcart($idcart)
    {
        $this->idcart = $idcart;

        return $this;
    }

    /**
     * Get idcart
     *
     * @return integer 
     */
    public function getIdcart()
    {
        return $this->idcart;
    }

    /**
     * Set idcustomer
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Customer $idcustomer
     * @return Cart
     */
    public function setIdcustomer(\uaUCR\uaProject2Bundle\Entity\Customer $idcustomer)
    {
        $this->idcustomer = $idcustomer;

        return $this;
    }

    /**
     * Get idcustomer
     *
     * @return \uaUCR\uaProject2Bundle\Entity\Customer 
     */
    public function getIdcustomer()
    {
        return $this->idcustomer;
    }

    /**
     * Set codmovie
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Movie $codmovie
     * @return Cart
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

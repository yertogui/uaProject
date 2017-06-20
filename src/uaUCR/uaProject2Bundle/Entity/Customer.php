<?php

namespace uaUCR\uaProject2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer", uniqueConstraints={@ORM\UniqueConstraint(name="user", columns={"email", "card"})})
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCustomer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcustomer;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=30, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=300, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="card", type="integer", nullable=true)
     */
    private $card;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Movie", inversedBy="idcustomer")
     * @ORM\JoinTable(name="purchase",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idCustomer", referencedColumnName="idCustomer")
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
     * Get idcustomer
     *
     * @return integer 
     */
    public function getIdcustomer()
    {
        return $this->idcustomer;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Customer
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
     * Set country
     *
     * @param string $country
     * @return Customer
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Customer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Customer
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
     * Set telephone
     *
     * @param integer $telephone
     * @return Customer
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Customer
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

    /**
     * Set card
     *
     * @param integer $card
     * @return Customer
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card
     *
     * @return integer 
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Add codmovie
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Movie $codmovie
     * @return Customer
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

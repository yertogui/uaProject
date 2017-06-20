<?php

namespace uaUCR\uaProject2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bill
 *
 * @ORM\Table(name="bill", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"idCustomer"}), @ORM\UniqueConstraint(name="code", columns={"code"})})
 * @ORM\Entity
 */
class Bill
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total;

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
     * Set code
     *
     * @param integer $code
     * @return Bill
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Bill
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return Bill
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set idcustomer
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Customer $idcustomer
     * @return Bill
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
}

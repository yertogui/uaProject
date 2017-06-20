<?php

namespace uaUCR\uaProject2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="idMovie", columns={"idMovie"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idComment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcomment;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=50, nullable=false)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=200, nullable=false)
     */
    private $comment;

    /**
     * @var \Movie
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Movie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMovie", referencedColumnName="codMovie")
     * })
     */
    private $idmovie;



    /**
     * Set idcomment
     *
     * @param integer $idcomment
     * @return Comment
     */
    public function setIdcomment($idcomment)
    {
        $this->idcomment = $idcomment;

        return $this;
    }

    /**
     * Get idcomment
     *
     * @return integer 
     */
    public function getIdcomment()
    {
        return $this->idcomment;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Comment
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set idmovie
     *
     * @param \uaUCR\uaProject2Bundle\Entity\Movie $idmovie
     * @return Comment
     */
    public function setIdmovie(\uaUCR\uaProject2Bundle\Entity\Movie $idmovie)
    {
        $this->idmovie = $idmovie;

        return $this;
    }

    /**
     * Get idmovie
     *
     * @return \uaUCR\uaProject2Bundle\Entity\Movie 
     */
    public function getIdmovie()
    {
        return $this->idmovie;
    }
}

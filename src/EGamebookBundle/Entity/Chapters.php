<?php

namespace EGamebookBundle\Entity;

/**
 * Chapters
 */
class Chapters
{


   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $decision;

    /**
     * @var string
     */
    private $buttonText;

    /**
     * @var \EGamebookBundle\Entity\Book
     */
    private $book;

    /**
     * @var \EGamebookBundle\Entity\Fichier
     */
    private $fichiers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $parents;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $childs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->childs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set number
     *
     * @param integer $number
     *
     * @return Chapters
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Chapters
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set decision
     *
     * @param string $decision
     *
     * @return Chapters
     */
    public function setDecision($decision)
    {
        $this->decision = $decision;

        return $this;
    }

    /**
     * Get decision
     *
     * @return string
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Set buttonText
     *
     * @param string $buttonText
     *
     * @return Chapters
     */
    public function setButtonText($buttonText)
    {
        $this->buttonText = $buttonText;

        return $this;
    }

    /**
     * Get buttonText
     *
     * @return string
     */
    public function getButtonText()
    {
        return $this->buttonText;
    }

    /**
     * Set book
     *
     * @param \EGamebookBundle\Entity\Book $book
     *
     * @return Chapters
     */
    public function setBook(\EGamebookBundle\Entity\Book $book = null)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return \EGamebookBundle\Entity\Book
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Set fichiers
     *
     * @param \EGamebookBundle\Entity\Fichier $fichiers
     *
     * @return Chapters
     */
    public function setFichiers(\EGamebookBundle\Entity\Fichier $fichiers = null)
    {
        $this->fichiers = $fichiers;

        return $this;
    }

    /**
     * Get fichiers
     *
     * @return \EGamebookBundle\Entity\Fichier
     */
    public function getFichiers()
    {
        return $this->fichiers;
    }

    /**
     * Add parent
     *
     * @param \EGamebookBundle\Entity\Chapters $parent
     *
     * @return Chapters
     */
    public function addParent(\EGamebookBundle\Entity\Chapters $parent)
    {
        $this->parents[] = $parent;

        return $this;
    }

    /**
     * Remove parent
     *
     * @param \EGamebookBundle\Entity\Chapters $parent
     */
    public function removeParent(\EGamebookBundle\Entity\Chapters $parent)
    {
        $this->parents->removeElement($parent);
    }

    /**
     * Get parents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * Add child
     *
     * @param \EGamebookBundle\Entity\Chapters $child
     *
     * @return Chapters
     */
    public function addChild(\EGamebookBundle\Entity\Chapters $child)
    {
        $this->childs[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \EGamebookBundle\Entity\Chapters $child
     */
    public function removeChild(\EGamebookBundle\Entity\Chapters $child)
    {
        $this->childs->removeElement($child);
    }

    /**
     * Get childs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChilds()
    {
        return $this->childs;
    }
    /**
     * @var string
     */
    private $title;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return Chapters
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
}

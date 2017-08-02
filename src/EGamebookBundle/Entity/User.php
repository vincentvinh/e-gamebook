<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 08/06/17
 * Time: 15:48
 */

namespace EGamebookBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

class User extends BaseUser
{

    protected $id;


    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $books;


    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
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
     * Add book
     *
     * @param \EGamebookBundle\Entity\Book $book
     *
     * @return User
     */
    public function addBook(\EGamebookBundle\Entity\Book $book)
    {
        $this->books[] = $book;

        return $this;
    }

    /**
     * Remove book
     *
     * @param \EGamebookBundle\Entity\Book $book
     */
    public function removeBook(\EGamebookBundle\Entity\Book $book)
    {
        $this->books->removeElement($book);
    }

    /**
     * Get books
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBooks()
    {
        return $this->books;
    }
    /**
     * @var string
     */
    private $gender;


    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
   

    /**
     * @var \EGamebookBundle\Entity\Fichier
     */
    private $fichier;


    /**
     * Set fichier
     *
     * @param \EGamebookBundle\Entity\Fichier $fichier
     *
     * @return User
     */
    public function setFichier(\EGamebookBundle\Entity\Fichier $fichier = null)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return \EGamebookBundle\Entity\Fichier
     */
    public function getFichier()
    {
        return $this->fichier;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 21/11/2017
 * Time: 12:44
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @package AppBundle\Entity
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CustomerRepository")
 */
class Customer
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank(groups={"step1"})
     */
    private $name;

    /**
     * @ORM\Column(name="first_name", type="string", length=255)
     * @Assert\NotBlank(groups={"step1"})
     */
    private $firstName;

    /**
     * @ORM\Column(name="street", type="text")
     * @Assert\NotBlank(groups={"step1"})
     */
    private $street;

    /**
     * @ORM\Column(name="postal_code", type="integer")
     * @Assert\Range(
     *     max=99999,
     *     groups={"step1"}
     * )
     */
    private $postalCode;

    /**
     * @ORM\Column(name="city", type="string", length=255)
     * @Assert\NotBlank(groups={"step1"})
     */
    private $city;

    /**
     * @ORM\Column(name="country", type="string", length=255)
     * @Assert\Country(groups={"step1"})
     */
    private $country;

    /**
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email(groups={"step1"})
     */
    private $email;



    /**
     * @return mixed
     */
    public function getVisit()
    {
        return $this->visit;
    }

    /**
     * @param mixed $visit
     */
    public function setVisit($visit)
    {
        $this->visit = $visit;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


}
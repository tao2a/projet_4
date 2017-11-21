<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 21/11/2017
 * Time: 12:49
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Ticket
 * @package AppBundle\Entity
 * @ORM\Entity
 */
class Ticket
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(name="birth_date", type="date")
     * @Assert\Range(
     *     max="now"
     * )
     */
    private $birthDate;

    /**
     * @ORM\Column(name="special_rate", type="boolean")
     */
    private $specialRate;

    /**
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

}
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
 * Class Visit
 * @package AppBundle\Entity
 * @ORM\Entity
 */
class Visit
{

    /**
     * @ORM\Column(name="id", type="string")
     * @ORM\Id()
     */
    private $id;

    /**
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @ORM\Column(name="nb_ticket", type="integer")
     * @Assert\Range(
     *     max="now"
     * )
     */
    private $nbTicket;

    /**
     * @ORM\Column(name="alf_day", type="boolean")
     */
    private $alfDay;

    /**
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     *
     */
    private $ticket;


}
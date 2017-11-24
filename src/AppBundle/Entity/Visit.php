<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 21/11/2017
 * Time: 12:49
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @package AppBundle\Entity
 * @ORM\Table(name="visit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Visit")
 */
class Visit
{

    /**
     * @ORM\Column(name="id", type="string")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="visit_date", type="date")
     * @Assert\GreaterThanOrEqual("today", message="Vous ne pouvez commander pour un jour passé.")
     */
    private $visitDate;

    /**
     * @ORM\Column(name="nb_ticket", type="integer")
     * @Assert\Range(min = 1, max = 10)
     *
     */
    private $nbTicket;

    /**
     * @ORM\Column(name="alf_day", type="boolean")
     */
    private $alfDay;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Customer", cascade={"persist"})
     * @Assert\Valid()
     *
     */
    private $customer;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ticket", mappedBy="visit")
     */
    private $tickets;


public function __construct()
{
    $this->visitDate = new  \DateTime();
    $this->tickets = new ArrayCollection();
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
    public function getVisitDate()
    {
        return $this->visitDate;
    }

    /**
     * @param mixed $visitDate
     */
    public function setVisitDate($visitDate)
    {
        $this->visitDate = $visitDate;
    }

    /**
     * @return mixed
     */
    public function getNbTicket()
    {
        return $this->nbTicket;
    }

    /**
     * @param mixed $nbTicket
     */
    public function setNbTicket($nbTicket)
    {
        $this->nbTicket = $nbTicket;
    }

    /**
     * @return mixed
     */
    public function getAlfDay()
    {
        return $this->alfDay;
    }

    /**
     * @param mixed $alfDay
     */
    public function setAlfDay($alfDay)
    {
        $this->alfDay = $alfDay;
    }


    /**
     * @return mixed
     */
    public function getTickets()
    {
        return $this->tickets;
    }

    /**
     * @param mixed $tickets
     */
    public function setTickets($tickets)
    {
        $this->tickets = $tickets;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }


}
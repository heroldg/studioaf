<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $surname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $phone_Number;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $date = [];

    /**
     * @ORM\Column(type="boolean")
     */
    private $statut_reservation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number_of_customers;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPhoneNumber(): ?int
    {
        return $this->phone_Number;
    }

    public function setPhoneNumber(?int $phone_Number): self
    {
        $this->phone_Number = $phone_Number;

        return $this;
    }

    public function getDate(): ?array
    {
        return $this->date;
    }

    public function setDate(?array $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function isStatutReservation(): ?bool
    {
        return $this->statut_reservation;
    }

    public function setStatutReservation(bool $statut_reservation): self
    {
        $this->statut_reservation = $statut_reservation;

        return $this;
    }

    public function getNumberOfCustomers(): ?int
    {
        return $this->number_of_customers;
    }

    public function setNumberOfCustomers(?int $number_of_customers): self
    {
        $this->number_of_customers = $number_of_customers;

        return $this;
    }
}

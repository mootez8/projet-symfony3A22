<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Sponsor; 
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\EventRepository;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ORM\Table(name: 'events')]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "idEvent", type: 'integer')]
    
    private ?int $idEvent = null;

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function setIdEvent(int $idEvent): self
    {
        $this->idEvent = $idEvent;
        return $this;
    }

    #[ORM\Column(name: "nomEv",type: 'string', nullable: false)]
   
    #[Assert\NotBlank(message: "Le nom de l'événement ne peut pas être vide")]
#[Assert\Type(type: 'string', message: "Le nom de l'événement doit être une chaîne de caractères")]
#[Assert\Length(
    max: 20,
    maxMessage: "Le nom de l'événement ne peut pas dépasser {{ limit }} caractères"
)]
#[Assert\Regex(
    pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
    message: "Le nom ne peut contenir que des lettres, espaces et tirets"
)]
    private ?string $nomEv = null;

    public function getNomEv(): ?string
    {
        return $this->nomEv;
    }

    public function setNomEv(string $nomEv): self
    {
        $this->nomEv = $nomEv;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "La description ne peut pas être vide")]
    private ?string $description = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    #[ORM\Column(name: "dateEvent", type: 'date', nullable: false)]
#[Assert\NotBlank(message: "La date de l'événement est obligatoire")]
#[Assert\Type(\DateTimeInterface::class, message: "La date doit être valide")]
#[Assert\GreaterThanOrEqual(
    "today",
    message: "La date doit être aujourd'hui ou dans le futur"
)]
    private ?\DateTimeInterface $dateEvent = null;

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->dateEvent;
    }

    public function setDateEvent(\DateTimeInterface $dateEvent): self
    {
        $this->dateEvent = $dateEvent;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Sponsor::class, inversedBy: 'events')]
    #[ORM\JoinColumn(name: "sponsor_id", referencedColumnName: "idsponsor", nullable: false)]
    #[Assert\NotBlank(message: "Le nom du sponsor ne peut pas être vide")]
private ?Sponsor $sponsor = null;

public function getSponsor(): ?Sponsor
{
    return $this->sponsor;
}

public function setSponsor(?Sponsor $sponsor): self
{
    $this->sponsor = $sponsor;
    return $this;
}

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le lieu ne peut pas être vide")]
    #[Assert\Regex(
        pattern: "/^(?!\d+$).+$/",
        message: "Le lieu ne peut pas contenir uniquement des chiffres"
    )]
    private ?string $lieu = null;

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;
        return $this;
    }

} 
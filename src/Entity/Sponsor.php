<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\SponsorRepository;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: SponsorRepository::class)]
#[ORM\Table(name: "sponsors", uniqueConstraints: [
    new ORM\UniqueConstraint(name: "unique_nom_sponsor", columns: ["nomSponsor"])
])]
class Sponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $idsponsor = null;

    public function getIdsponsor(): ?int
    {
        return $this->idsponsor;
    }

    public function setIdsponsor(int $idsponsor): self
    {
        $this->idsponsor = $idsponsor;
        return $this;
    }

    
    #[ORM\Column(name: "nomSponsor", type: 'string', length: 20, nullable: false, unique: true)]
    #[Assert\NotBlank(message: "Le nom de sponsor ne peut pas être vide")]
    #[Assert\Type(type: 'string', message: "Le nom de sponsor doit être une chaîne de caractères")]
#[Assert\Length(
    max: 20,
    maxMessage: "Le nom de sponsor ne peut pas dépasser {{ limit }} caractères"
)]
#[Assert\Regex(
    pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
    message: "Le nom ne peut contenir que des lettres, espaces et tirets"
)]
    private ?string $nomSponsor = null;

    public function getNomSponsor(): ?string
    {
        return $this->nomSponsor;
    }

    public function setNomSponsor(string $nomSponsor): self
    {
        $this->nomSponsor = $nomSponsor;
        return $this;
    }

    #[ORM\Column(name: "emailSpon",type: 'text', nullable: false)]
    #[Assert\NotBlank(message: "L'email de sponsor ne peut pas être vide")]
    #[Assert\Email(
        message: "L'email '{{ value }}' n'est pas valide",
        mode: 'strict'
    )]
    #[Assert\Length(
        max: 180,
        maxMessage: "L'email ne peut pas dépasser {{ limit }} caractères"
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",
        message: "Format d'email invalide"
    )]
    private ?string $emailSpon = null;

    public function getEmailSpon(): ?string
    {
        return $this->emailSpon;
    }

    public function setEmailSpon(string $emailSpon): self
    {
        $this->emailSpon = $emailSpon;
        return $this;
    }

    #[ORM\Column(type: 'float', nullable: false)]
    #[Assert\NotBlank(message: "La contribution ne peut pas être vide")]
    #[Assert\Type(
        type: 'numeric',
        message: "La contribution doit être un nombre"
    )]
    #[Assert\Positive(
        message: "La contribution doit être positive"
    )]
    #[Assert\GreaterThanOrEqual(
        value: 1000,
        message: "La contribution minimale est de {{ compared_value }} DT"
    )]
    #[Assert\Regex(
        pattern: "/^\d+(\.\d{1,2})?$/",
        message: "Format invalide (ex: 1500 ou 2500.50)"
    )]
    private ?float $contribution = null;

    public function getContribution(): ?float
    {
        return $this->contribution;
    }

    public function setContribution(float $contribution): self
    {
        $this->contribution = $contribution;
        return $this;
    }


    #[ORM\OneToMany(mappedBy: 'sponsor', targetEntity: Event::class)]
private Collection $events;

public function __construct()
{
    $this->events = new ArrayCollection();
}

public function getEvents(): Collection
{
    return $this->events;
}

}
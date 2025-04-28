<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
private ?int $id = null;


    #[ORM\Column]
    #[Assert\NotBlank(message: "Le prix de l'offre est obligatoire.")]
    #[Assert\Positive(message: "Le prix de l'offre doit être supérieur à zéro.")]
    private ?float $prix_offre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description_offre = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "L'identifiant de l'événement est obligatoire.")]
    #[Assert\Positive(message: "L'identifiant de l'événement doit être supérieur à zéro.")]
    private ?int $id_event = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Positive(message: "Le nombre de places disponibles doit être supérieur à zéro.")]
    private ?int $nbr_placesDis = null;

    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'offre')]
    private Collection $Reservations;

    public function __construct()
    {
        $this->Reservations = new ArrayCollection();
    }

    // Getter for id_offre
    public function getId(): ?int
{
    return $this->id;
}


    // Getter and setter for prix_offre
    public function getPrixOffre(): ?float
    {
        return $this->prix_offre;
    }

    public function setPrixOffre(float $prix_offre): self
    {
        $this->prix_offre = $prix_offre;
        return $this;
    }

    // Getter and setter for description_offre
    public function getDescriptionOffre(): ?string
    {
        return $this->description_offre;
    }

    public function setDescriptionOffre(?string $description_offre): self
    {
        $this->description_offre = $description_offre;
        return $this;
    }

    // Getter and setter for id_event
    public function getIdEvent(): ?int
    {
        return $this->id_event;
    }

    public function setIdEvent(int $id_event): self
    {
        $this->id_event = $id_event;
        return $this;
    }

    // Getter and setter for nbr_placesDis
    public function getNbrPlacesDis(): ?int
    {
        return $this->nbr_placesDis;
    }

    public function setNbrPlacesDis(?int $nbr_placesDis): self
    {
        $this->nbr_placesDis = $nbr_placesDis;
        return $this;
    }

    // Check if the offer is full
    public function isFull(): bool
    {
        return $this->nbr_placesDis <= 0;
    }

    // Calculate the price for the reservation based on the number of places
    public function getPrixReservation(int $nbrPlaces): float
    {
        return $this->prix_offre * $nbrPlaces;
    }

    // Update the available places after a reservation
    public function updateAvailablePlaces(int $placesReserved): void
    {
        $this->nbr_placesDis = max(0, $this->nbr_placesDis - $placesReserved);
    }

    // Getter for Reservations
    public function getReservations(): Collection
    {
        return $this->Reservations;
    }
}

<?php
namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id", type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message: "Le nombre de places réservé est obligatoire.")]
    #[Assert\Positive(message: "Le nombre de places réservé doit être supérieur à zéro.")]
    private ?int $nbr_places = null;

    #[ORM\ManyToOne(targetEntity: Offre::class, inversedBy: 'Reservations')]
    #[ORM\JoinColumn(name: 'offre_id', referencedColumnName: 'id')]
    private ?Offre $offre = null;

    #[ORM\Column(type: "float")]
    private ?float $prix_total = null;

    #[ORM\Column(type: "datetime")]
    private ?\DateTimeInterface $date_reservation = null;

    public function __construct()
    {
        $this->date_reservation = new \DateTime(); // Default to current date and time
    }

    // Getter and setter for id
    public function getId(): ?int
    {
        return $this->id;
    }

    // Getter and setter for nbr_places
    public function getNbrPlaces(): ?int
    {
        return $this->nbr_places;
    }

    public function setNbrPlaces(int $nbr_places): self
    {
        $this->nbr_places = $nbr_places;
        return $this;
    }

    // Getter and setter for offre
    public function getOffre(): ?Offre
    {
        return $this->offre;
    }

    public function setOffre(?Offre $offre): self
    {
        $this->offre = $offre;
        return $this;
    }

    // Getter and setter for prix_total
    public function getPrixTotal(): ?float
    {
        return $this->prix_total;
    }

    public function setPrixTotal(float $prix_total): self
    {
        $this->prix_total = $prix_total;
        return $this;
    }

    // Getter and setter for date_reservation
    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->date_reservation;
    }

    public function setDateReservation(\DateTimeInterface $date_reservation): self
    {
        $this->date_reservation = $date_reservation;
        return $this;
    }

    // Calculate the total price for this reservation
    public function calculateTotalPrice(): void
    {
        if ($this->offre) {
            $this->prix_total = $this->offre->getPrixOffre() * $this->nbr_places;
        }
    }

    // Check if reservation is valid (enough available places in the offer)
    public function isValidReservation(): bool
    {
        if ($this->offre) {
            return $this->offre->getNbrPlacesDis() >= $this->nbr_places;
        }
        return false;
    }

    // Update available places after reservation
    public function updateAvailablePlaces(): void
    {
        if ($this->offre) {
            $this->offre->updateAvailablePlaces($this->nbr_places);
        }
    }
}

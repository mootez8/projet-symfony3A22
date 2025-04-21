<?php
namespace App\Entity;

use App\Repository\TrajetRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TrajetRepository::class)]
class Trajet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 100)]
    private string $departure;

    #[ORM\Column(type: 'string', length: 100)]
    private string $destination;

    #[ORM\Column(type: 'string', length: 100)]
    private string $schedule;

    #[ORM\Column(type: 'float')]
    private float $price;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $created;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $statut = null;

    #[ORM\Column(type: 'integer')]
    private int $rating;

    #[ORM\ManyToOne(targetEntity: Transport::class, inversedBy: 'trajets')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Transport $transport = null;

    
    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $iduser = null;
    

    // Getters and Setters below
    public function getId(): ?int { return $this->id; }

    public function getDeparture(): string { return $this->departure; }
    public function setDeparture(string $departure): self { $this->departure = $departure; return $this; }

    public function getDestination(): string { return $this->destination; }
    public function setDestination(string $destination): self { $this->destination = $destination; return $this; }

    public function getSchedule(): string { return $this->schedule; }
    public function setSchedule(string $schedule): self { $this->schedule = $schedule; return $this; }

    public function getPrice(): float { return $this->price; }
    public function setPrice(float $price): self { $this->price = $price; return $this; }

    public function getCreated(): \DateTimeInterface { return $this->created; }
    public function setCreated(\DateTimeInterface $created): self { $this->created = $created; return $this; }

    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(?string $statut): self { $this->statut = $statut; return $this; }

    public function getRating(): int { return $this->rating; }
    public function setRating(int $rating): self { $this->rating = $rating; return $this; }

    public function getTransport(): ?Transport { return $this->transport; }
    public function setTransport(?Transport $transport): self { $this->transport = $transport; return $this; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): self { $this->user = $user; return $this; }
}

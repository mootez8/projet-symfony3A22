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
    #[Assert\NotBlank(message: 'Departure cannot be empty.')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Departure must be at least {{ limit }} characters.',
        maxMessage: 'Departure cannot be longer than {{ limit }} characters.'
    )]
    private string $departure;

    #[ORM\Column(type: 'string', length: 100)]
    #[Assert\NotBlank(message: 'Destination cannot be empty.')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Destination must be at least {{ limit }} characters.',
        maxMessage: 'Destination cannot be longer than {{ limit }} characters.'
    )]
    private string $destination;

    #[ORM\Column(type: 'datetime')]
#[Assert\NotNull(message: 'Schedule date is required.')]
private ?\DateTimeInterface $schedule = null;

    #[ORM\Column(type: 'float')]
    #[Assert\NotNull(message: 'Price must be provided.')]
    #[Assert\Positive(message: 'Price must be a positive number.')]
    private float $price;

    #[ORM\Column(type: 'datetime')]
    #[Assert\NotNull(message: 'Created date must be provided.')]
    #[Assert\Type(type: \DateTimeInterface::class, message: 'Invalid date format.')]
    private ?\DateTimeInterface $created;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $statut = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotNull(message: 'Rating must be provided.')]
    #[Assert\Range(
        min: 0,
        max: 5,
        notInRangeMessage: 'Rating must be between {{ min }} and {{ max }}.'
    )]
    private int $rating;

    #[ORM\ManyToOne(targetEntity: Transport::class, inversedBy: 'trajets')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Transport must be selected.')]
    private ?Transport $transport = null;

    
    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $iduser = null;
    

    // Getters and Setters below
    public function getId(): ?int { return $this->id; }

    public function getDeparture(): string { return $this->departure; }
    public function setDeparture(string $departure): self { $this->departure = $departure; return $this; }

    public function getDestination(): string { return $this->destination; }
    public function setDestination(string $destination): self { $this->destination = $destination; return $this; }

    public function getSchedule(): ?\DateTimeInterface{return $this->schedule;}
    public function setSchedule(\DateTimeInterface $schedule): self{$this->schedule = $schedule;return $this;}

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

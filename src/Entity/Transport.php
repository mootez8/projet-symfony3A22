<?php
// src/Entity/Transport.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Transport
{    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;  // Ensure this is declared

    // Getter for the ID
    public function getId(): ?int
    {
        return $this->id;
    }
    #[ORM\Column(type: 'integer')]
    private int $capacityTransport;

    #[ORM\Column(type: 'string')]
    private string $statusTransport;

    #[ORM\Column(type: 'string')]
    private string $typeTransport;  // Now just a simple string

    #[ORM\Column(type: 'string')]
    private ?string $image;

    // Getter for typeTransport (now returns a simple string)
    public function getTypeTransport(): string
    {
        return $this->typeTransport;
    }

    // Setter for typeTransport (now accepts a string)
    public function setTypeTransport(string $typeTransport): self
    {
        $this->typeTransport = $typeTransport;
        return $this;
    }

    // Getter and Setter for other properties
    public function getCapacityTransport(): int
    {
        return $this->capacityTransport;
    }

    public function setCapacityTransport(int $capacityTransport): self
    {
        $this->capacityTransport = $capacityTransport;
        return $this;
    }

    public function getStatusTransport(): string
    {
        return $this->statusTransport;
    }

    public function setStatusTransport(string $statusTransport): self
    {
        $this->statusTransport = $statusTransport;
        return $this;
    }
    public function getImage(): ?string
{
    return $this->image;
}

public function setImage(?string $image): self
{
    $this->image = $image;
    return $this;
}
}

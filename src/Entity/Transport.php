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
    #[Assert\NotNull(message: 'Capacity is required.')]
    #[Assert\Positive(message: 'Capacity must be a positive number.')]
    private ?int $capacityTransport = null;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank(message: 'Status cannot be empty.')]
    private ?string $statusTransport = null;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank(message: 'Type of transport cannot be empty.')]
    private ?string $typeTransport = null;  // Now just a simple string

    #[ORM\Column(type: 'string')]
    private ?string $image = null;
    

    // Getter for typeTransport (now returns a simple string)
    public function getTypeTransport(): ?string
    {
        return $this->typeTransport;
    }

    // Setter for typeTransport (now accepts a string)
    public function setTypeTransport(?string $typeTransport): self
{
    $this->typeTransport = $typeTransport;
    return $this;
}
    

    // Getter and Setter for other properties
    public function getCapacityTransport(): ?int
    {
        return $this->capacityTransport;
    }

  public function setCapacityTransport(?int $capacityTransport): self
    {
        $this->capacityTransport = $capacityTransport;
        return $this;
}


    public function getStatusTransport(): ?string
    {
        return $this->statusTransport;
    }

    public function setStatusTransport(?string $statusTransport): self
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

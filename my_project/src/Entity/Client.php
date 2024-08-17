<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Vehicule = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Mecanicien = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Reparation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVehicule(): ?string
    {
        return $this->Vehicule;
    }

    public function setVehicule(?string $Vehicule): static
    {
        $this->Vehicule = $Vehicule;

        return $this;
    }

    public function getMecanicien(): ?string
    {
        return $this->Mecanicien;
    }

    public function setMecanicien(?string $Mecanicien): static
    {
        $this->Mecanicien = $Mecanicien;

        return $this;
    }

    public function getReparation(): ?string
    {
        return $this->Reparation;
    }

    public function setReparation(?string $Reparation): static
    {
        $this->Reparation = $Reparation;

        return $this;
    }
}

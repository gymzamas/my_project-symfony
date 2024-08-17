<?php

namespace App\Entity;

use App\Repository\MecanicienRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MecanicienRepository::class)]
class Mecanicien
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $specialisation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSpecialisation(): ?string
    {
        return $this->specialisation;
    }

    public function setSpecialisation(?string $specialisation): static
    {
        $this->specialisation = $specialisation;

        return $this;
    }
}

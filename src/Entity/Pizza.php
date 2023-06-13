<?php

namespace App\Entity;

use App\Repository\PizzaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PizzaRepository::class)]
class Pizza
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $precio = null;

    #[ORM\Column(length: 255)]
    private ?string $sabor = null;

    #[ORM\Column(length: 255)]
    private ?string $Peso = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrecio(): ?string
    {
        return $this->precio;
    }

    public function setPrecio(string $precio): static
    {
        $this->precio = $precio;

        return $this;
    }

    public function getSabor(): ?string
    {
        return $this->sabor;
    }

    public function setSabor(string $sabor): static
    {
        $this->sabor = $sabor;

        return $this;
    }

    public function getPeso(): ?string
    {
        return $this->Peso;
    }

    public function setPeso(string $Peso): static
    {
        $this->Peso = $Peso;

        return $this;
    }
}

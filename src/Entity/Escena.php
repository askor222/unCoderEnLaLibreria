<?php

namespace App\Entity;

use App\Repository\EscenaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EscenaRepository::class)]
class Escena
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\Column(length: 255)]
    private ?string $ciudad = null;

    #[ORM\Column(length: 255)]
    private ?string $t_crimen = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 255)]
    private ?string $testigo1 = null;

    #[ORM\Column(length: 255)]
    private ?string $testigo2 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): static
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getTCrimen(): ?string
    {
        return $this->t_crimen;
    }

    public function setTCrimen(string $t_crimen): static
    {
        $this->t_crimen = $t_crimen;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getTestigo1(): ?string
    {
        return $this->testigo1;
    }

    public function setTestigo1(string $testigo1): static
    {
        $this->testigo1 = $testigo1;

        return $this;
    }

    public function getTestigo2(): ?string
    {
        return $this->testigo2;
    }

    public function setTestigo2(string $testigo2): static
    {
        $this->testigo2 = $testigo2;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\CrystalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CrystalRepository::class)
 */
class Crystal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $name;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $attackPower;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $defensePower;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAttackPower(): ?int
    {
        return $this->attackPower;
    }

    public function setAttackPower(?int $attackPower): self
    {
        $this->attackPower = $attackPower;

        return $this;
    }

    public function getDefensePower(): ?int
    {
        return $this->defensePower;
    }

    public function setDefensePower(?int $defensePower): self
    {
        $this->defensePower = $defensePower;

        return $this;
    }
}

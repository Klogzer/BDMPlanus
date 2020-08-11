<?php

namespace App\Entity;

use App\Repository\ShoesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ShoesRepository::class)
 */
class Shoes
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
    private $AttackPower;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $DefensePower;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $MaximumMana;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $MagicRegen;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $AttackSpeed;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $CritChance;

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
        return $this->AttackPower;
    }

    public function setAttackPower(?int $AttackPower): self
    {
        $this->AttackPower = $AttackPower;

        return $this;
    }

    public function getDefensePower(): ?int
    {
        return $this->DefensePower;
    }

    public function setDefensePower(?int $DefensePower): self
    {
        $this->DefensePower = $DefensePower;

        return $this;
    }

    public function getMaximumMana(): ?int
    {
        return $this->MaximumMana;
    }

    public function setMaximumMana(?int $MaximumMana): self
    {
        $this->MaximumMana = $MaximumMana;

        return $this;
    }

    public function getMagicRegen(): ?string
    {
        return $this->MagicRegen;
    }

    public function setMagicRegen(?string $MagicRegen): self
    {
        $this->MagicRegen = $MagicRegen;

        return $this;
    }

    public function getAttackSpeed(): ?string
    {
        return $this->AttackSpeed;
    }

    public function setAttackSpeed(?string $AttackSpeed): self
    {
        $this->AttackSpeed = $AttackSpeed;

        return $this;
    }

    public function getCritChance(): ?string
    {
        return $this->CritChance;
    }

    public function setCritChance(?string $CritChance): self
    {
        $this->CritChance = $CritChance;

        return $this;
    }
}

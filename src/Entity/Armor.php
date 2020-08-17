<?php

namespace App\Entity;

use App\Repository\ArmorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArmorRepository::class)
 */
class Armor
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
    private $HealthPoints;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $MaximumMana;

    /**
     * @ORM\Column(type="smallint")
     */
    private $RegenMana;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $MoveSpeed;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $MagicRegen;

    /**
     * @ORM\ManyToOne(targetEntity=ItemGrade::class, inversedBy="armors")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ItemGrade;

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

    public function getHealthPoints(): ?int
    {
        return $this->HealthPoints;
    }

    public function setHealthPoints(?int $HealthPoints): self
    {
        $this->HealthPoints = $HealthPoints;

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

    public function getRegenMana(): ?int
    {
        return $this->RegenMana;
    }

    public function setRegenMana(int $RegenMana): self
    {
        $this->RegenMana = $RegenMana;

        return $this;
    }

    public function getMoveSpeed(): ?int
    {
        return $this->MoveSpeed;
    }

    public function setMoveSpeed(?int $MoveSpeed): self
    {
        $this->MoveSpeed = $MoveSpeed;

        return $this;
    }

    public function getMagicRegen(): ?int
    {
        return $this->MagicRegen;
    }

    public function setMagicRegen(?int $MagicRegen): self
    {
        $this->MagicRegen = $MagicRegen;

        return $this;
    }

    public function getItemGrade(): ?ItemGrade
    {
        return $this->ItemGrade;
    }

    public function setItemGrade(?ItemGrade $ItemGrade): self
    {
        $this->ItemGrade = $ItemGrade;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\SubWeaponRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubWeaponRepository::class)
 */
class SubWeapon
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

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
    private $CritChance;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $MoveSpeed;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCritChance(): ?int
    {
        return $this->CritChance;
    }

    public function setCritChance(?int $CritChance): self
    {
        $this->CritChance = $CritChance;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

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
    private $attackPower;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $defensePower;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $critChance;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $moveSpeed;

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

    public function getCritChance(): ?int
    {
        return $this->critChance;
    }

    public function setCritChance(?int $critChance): self
    {
        $this->critChance = $critChance;

        return $this;
    }

    public function getMoveSpeed(): ?int
    {
        return $this->moveSpeed;
    }

    public function setMoveSpeed(?int $moveSpeed): self
    {
        $this->moveSpeed = $moveSpeed;

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

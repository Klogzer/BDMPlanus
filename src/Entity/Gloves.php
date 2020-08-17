<?php

namespace App\Entity;

use App\Repository\GlovesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GlovesRepository::class)
 */
class Gloves
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=602)
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

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $maximumMana;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $critChance;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $magicRegen;

    /**
     * @ORM\ManyToOne(targetEntity=ItemGrade::class, inversedBy="gloves")
     * @ORM\JoinColumn(nullable=false)
     */
    private $itemGrade;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $attackSpeed;

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

    public function getMaximumMana(): ?int
    {
        return $this->maximumMana;
    }

    public function setMaximumMana(?int $maximumMana): self
    {
        $this->maximumMana = $maximumMana;

        return $this;
    }

    public function getCritChance(): ?string
    {
        return $this->critChance;
    }

    public function setCritChance(?string $critChance): self
    {
        $this->critChance = $critChance;

        return $this;
    }

    public function getMagicRegen(): ?int
    {
        return $this->magicRegen;
    }

    public function setMagicRegen(?int $magicRegen): self
    {
        $this->magicRegen = $magicRegen;

        return $this;
    }

    public function getItemGrade(): ?ItemGrade
    {
        return $this->itemGrade;
    }

    public function setItemGrade(?ItemGrade $itemGrade): self
    {
        $this->itemGrade = $itemGrade;

        return $this;
    }

    public function getAttackSpeed(): ?string
    {
        return $this->attackSpeed;
    }

    public function setAttackSpeed(?string $attackSpeed): self
    {
        $this->attackSpeed = $attackSpeed;

        return $this;
    }
}

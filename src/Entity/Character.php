<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CharacterRepository::class)
 * @ORM\Table(name="`character`")
 */
class Character
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
     * @ORM\Column(type="smallint")
     */
    private $level;

    /**
     * @ORM\ManyToOne(targetEntity=Weapon::class)
     */
    private $weapon;

    /**
     * @ORM\ManyToOne(targetEntity=CharacterProfession::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $profession;

    /**
     * @ORM\ManyToOne(targetEntity=SubWeapon::class)
     */
    private $subWeapon;

    /**
     * @ORM\ManyToOne(targetEntity=Helmet::class)
     */
    private $helmet;

    /**
     * @ORM\ManyToOne(targetEntity=Armor::class)
     */
    private $armor;

    /**
     * @ORM\ManyToOne(targetEntity=Gloves::class)
     */
    private $gloves;

    /**
     * @ORM\ManyToOne(targetEntity=Shoes::class)
     */
    private $shoes;

    /**
     * @ORM\ManyToOne(targetEntity=Family::class, inversedBy="characters")
     * @ORM\JoinColumn(nullable=false)
     */
    private $family;

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

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getWeapon(): ?Weapon
    {
        return $this->weapon;
    }

    public function setWeapon(?Weapon $weapon): self
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function getProfession(): ?CharacterProfession
    {
        return $this->profession;
    }

    public function setProfession(?CharacterProfession $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getSubWeapon(): ?SubWeapon
    {
        return $this->subWeapon;
    }

    public function setSubWeapon(?SubWeapon $subWeapon): self
    {
        $this->subWeapon = $subWeapon;

        return $this;
    }

    public function getHelmet(): ?Helmet
    {
        return $this->helmet;
    }

    public function setHelmet(?Helmet $helmet): self
    {
        $this->helmet = $helmet;

        return $this;
    }

    public function getArmor(): ?Armor
    {
        return $this->armor;
    }

    public function setArmor(?Armor $armor): self
    {
        $this->armor = $armor;

        return $this;
    }

    public function getGloves(): ?Gloves
    {
        return $this->gloves;
    }

    public function setGloves(?Gloves $gloves): self
    {
        $this->gloves = $gloves;

        return $this;
    }

    public function getShoes(): ?Shoes
    {
        return $this->shoes;
    }

    public function setShoes(?Shoes $shoes): self
    {
        $this->shoes = $shoes;

        return $this;
    }

    public function getFamily(): ?Family
    {
        return $this->family;
    }

    public function setFamily(?Family $family): self
    {
        $this->family = $family;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}

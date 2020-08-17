<?php

namespace App\Entity;

use App\Repository\ItemGradeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemGradeRepository::class)
 */
class ItemGrade
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
     * @ORM\Column(type="string", length=60)
     */
    private $Color;

    /**
     * @ORM\OneToMany(targetEntity=Gloves::class, mappedBy="itemGrade")
     */
    private $gloves;

    /**
     * @ORM\OneToMany(targetEntity=Armor::class, mappedBy="ItemGrade")
     */
    private $armors;

    /**
     * @ORM\OneToMany(targetEntity=Helmet::class, mappedBy="itemGrade")
     */
    private $helmets;

    /**
     * @ORM\OneToMany(targetEntity=Shoes::class, mappedBy="itemGrade")
     */
    private $shoes;

    /**
     * @ORM\OneToMany(targetEntity=SubWeapon::class, mappedBy="itemGrade")
     */
    private $subWeapons;

    /**
     * @ORM\OneToMany(targetEntity=Weapon::class, mappedBy="itemGrade")
     */
    private $weapons;

    public function __construct()
    {
        $this->gloves = new ArrayCollection();
        $this->armors = new ArrayCollection();
        $this->helmets = new ArrayCollection();
        $this->shoes = new ArrayCollection();
        $this->subWeapons = new ArrayCollection();
        $this->weapons = new ArrayCollection();
    }

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

    public function getColor(): ?string
    {
        return $this->Color;
    }

    public function setColor(string $Color): self
    {
        $this->Color = $Color;

        return $this;
    }

    /**
     * @return Collection|Gloves[]
     */
    public function getGloves(): Collection
    {
        return $this->gloves;
    }

    public function addGlove(Gloves $glove): self
    {
        if (!$this->gloves->contains($glove)) {
            $this->gloves[] = $glove;
            $glove->setItemGrade($this);
        }

        return $this;
    }

    public function removeGlove(Gloves $glove): self
    {
        if ($this->gloves->contains($glove)) {
            $this->gloves->removeElement($glove);
            // set the owning side to null (unless already changed)
            if ($glove->getItemGrade() === $this) {
                $glove->setItemGrade(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Armor[]
     */
    public function getArmors(): Collection
    {
        return $this->armors;
    }

    public function addArmor(Armor $armor): self
    {
        if (!$this->armors->contains($armor)) {
            $this->armors[] = $armor;
            $armor->setItemGrade($this);
        }

        return $this;
    }

    public function removeArmor(Armor $armor): self
    {
        if ($this->armors->contains($armor)) {
            $this->armors->removeElement($armor);
            // set the owning side to null (unless already changed)
            if ($armor->getItemGrade() === $this) {
                $armor->setItemGrade(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Helmet[]
     */
    public function getHelmets(): Collection
    {
        return $this->helmets;
    }

    public function addHelmet(Helmet $helmet): self
    {
        if (!$this->helmets->contains($helmet)) {
            $this->helmets[] = $helmet;
            $helmet->setItemGrade($this);
        }

        return $this;
    }

    public function removeHelmet(Helmet $helmet): self
    {
        if ($this->helmets->contains($helmet)) {
            $this->helmets->removeElement($helmet);
            // set the owning side to null (unless already changed)
            if ($helmet->getItemGrade() === $this) {
                $helmet->setItemGrade(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Shoes[]
     */
    public function getShoes(): Collection
    {
        return $this->shoes;
    }

    public function addShoe(Shoes $shoe): self
    {
        if (!$this->shoes->contains($shoe)) {
            $this->shoes[] = $shoe;
            $shoe->setItemGrade($this);
        }

        return $this;
    }

    public function removeShoe(Shoes $shoe): self
    {
        if ($this->shoes->contains($shoe)) {
            $this->shoes->removeElement($shoe);
            // set the owning side to null (unless already changed)
            if ($shoe->getItemGrade() === $this) {
                $shoe->setItemGrade(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SubWeapon[]
     */
    public function getSubWeapons(): Collection
    {
        return $this->subWeapons;
    }

    public function addSubWeapon(SubWeapon $subWeapon): self
    {
        if (!$this->subWeapons->contains($subWeapon)) {
            $this->subWeapons[] = $subWeapon;
            $subWeapon->setItemGrade($this);
        }

        return $this;
    }

    public function removeSubWeapon(SubWeapon $subWeapon): self
    {
        if ($this->subWeapons->contains($subWeapon)) {
            $this->subWeapons->removeElement($subWeapon);
            // set the owning side to null (unless already changed)
            if ($subWeapon->getItemGrade() === $this) {
                $subWeapon->setItemGrade(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Weapon[]
     */
    public function getWeapons(): Collection
    {
        return $this->weapons;
    }

    public function addWeapon(Weapon $weapon): self
    {
        if (!$this->weapons->contains($weapon)) {
            $this->weapons[] = $weapon;
            $weapon->setItemGrade($this);
        }

        return $this;
    }

    public function removeWeapon(Weapon $weapon): self
    {
        if ($this->weapons->contains($weapon)) {
            $this->weapons->removeElement($weapon);
            // set the owning side to null (unless already changed)
            if ($weapon->getItemGrade() === $this) {
                $weapon->setItemGrade(null);
            }
        }

        return $this;
    }
}

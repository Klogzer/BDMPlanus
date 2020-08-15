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

    public function __construct()
    {
        $this->gloves = new ArrayCollection();
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
}

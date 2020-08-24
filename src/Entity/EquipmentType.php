<?php

namespace App\Entity;

use App\Repository\EquipmentTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipmentTypeRepository::class)
 */
class EquipmentType
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
    private $typeName;

    /**
     * @ORM\OneToMany(targetEntity=Equipment::class, mappedBy="equipmentType")
     */
    private $equipmentOfType;

    public function __construct()
    {
        $this->equipmentOfType = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeName(): ?string
    {
        return $this->typeName;
    }

    public function setTypeName(string $typeName): self
    {
        $this->typeName = $typeName;

        return $this;
    }

    /**
     * @return Collection|Equipment[]
     */
    public function getEquipmentOfType(): Collection
    {
        return $this->equipmentOfType;
    }

    public function addEqupuimentAtributte(Equipment $equpuimentAtributte): self
    {
        if (!$this->equipmentOfType->contains($equpuimentAtributte)) {
            $this->equipmentOfType[] = $equpuimentAtributte;
            $equpuimentAtributte->setEquipmentType($this);
        }

        return $this;
    }

    public function removeEqupuimentAtributte(Equipment $equpuimentAtributte): self
    {
        if ($this->equipmentOfType->contains($equpuimentAtributte)) {
            $this->equipmentOfType->removeElement($equpuimentAtributte);
            // set the owning side to null (unless already changed)
            if ($equpuimentAtributte->getEquipmentType() === $this) {
                $equpuimentAtributte->setEquipmentType(null);
            }
        }

        return $this;
    }
}

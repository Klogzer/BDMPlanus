<?php

namespace App\Entity;

use App\Repository\EquipmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipmentRepository::class)
 */
class Equipment
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
     * @ORM\ManyToOne(targetEntity=EquipmentType::class, inversedBy="equpuimentAtributte")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipmentType;

    /**
     * @ORM\OneToMany(targetEntity=EquipmentAttributeValue::class, mappedBy="equipment", orphanRemoval=true)
     */
    private $equpuimentAtributte;

    public function __construct()
    {
        $this->equpuimentAtributte = new ArrayCollection();
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

    public function getEquipmentType(): ?EquipmentType
    {
        return $this->equipmentType;
    }

    public function setEquipmentType(?EquipmentType $equipmentType): self
    {
        $this->equipmentType = $equipmentType;

        return $this;
    }

    /**
     * @return Collection|EquipmentAttributeValue[]
     */
    public function getEqupuimentAtributte(): Collection
    {
        return $this->equpuimentAtributte;
    }

    public function addEqupuimentAtributte(EquipmentAttributeValue $equpuimentAtributte): self
    {
        if (!$this->equpuimentAtributte->contains($equpuimentAtributte)) {
            $this->equpuimentAtributte[] = $equpuimentAtributte;
            $equpuimentAtributte->setEquipment($this);
        }

        return $this;
    }

    public function removeEqupuimentAtributte(EquipmentAttributeValue $equpuimentAtributte): self
    {
        if ($this->equpuimentAtributte->contains($equpuimentAtributte)) {
            $this->equpuimentAtributte->removeElement($equpuimentAtributte);
            // set the owning side to null (unless already changed)
            if ($equpuimentAtributte->getEquipment() === $this) {
                $equpuimentAtributte->setEquipment(null);
            }
        }

        return $this;
    }
}

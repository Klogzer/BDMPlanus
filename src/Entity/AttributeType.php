<?php

namespace App\Entity;

use App\Repository\AttributeTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AttributeTypeRepository::class)
 */
class AttributeType
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
     * @ORM\Column(type="string", length=60)
     */
    private $attributeGroup;

    /**
     * @ORM\OneToMany(targetEntity=EquipmentAttributeValue::class, mappedBy="attributeType", orphanRemoval=true)
     */
    private $equipmentAttributeValue;

    public function __construct()
    {
        $this->equipmentAttributeValue = new ArrayCollection();
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

    public function getAttributeGroup(): ?string
    {
        return $this->attributeGroup;
    }

    public function setAttributeGroup(string $attributeGroup): self
    {
        $this->attributeGroup = $attributeGroup;

        return $this;
    }

    /**
     * @return Collection|EquipmentAttributeValue[]
     */
    public function getEquipmentAttributeValue(): Collection
    {
        return $this->equipmentAttributeValue;
    }

    public function addEquipmentAttributeValue(EquipmentAttributeValue $equipmentAttributeValue): self
    {
        if (!$this->equipmentAttributeValue->contains($equipmentAttributeValue)) {
            $this->equipmentAttributeValue[] = $equipmentAttributeValue;
            $equipmentAttributeValue->setAttributeType($this);
        }

        return $this;
    }

    public function removeEquipmentAttributeValue(EquipmentAttributeValue $equipmentAttributeValue): self
    {
        if ($this->equipmentAttributeValue->contains($equipmentAttributeValue)) {
            $this->equipmentAttributeValue->removeElement($equipmentAttributeValue);
            // set the owning side to null (unless already changed)
            if ($equipmentAttributeValue->getAttributeType() === $this) {
                $equipmentAttributeValue->setAttributeType(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\EquipmentAttributeValueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipmentAttributeValueRepository::class)
 */
class EquipmentAttributeValue
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity=Equipment::class, inversedBy="equpuimentAtributte")
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipment;

    /**
     * @ORM\ManyToOne(targetEntity=AttributeType::class, inversedBy="equipmentAttributeValue")
     * @ORM\JoinColumn(nullable=false)
     */
    private $attributeType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getEquipment(): ?Equipment
    {
        return $this->equipment;
    }

    public function setEquipment(?Equipment $equipment): self
    {
        $this->equipment = $equipment;

        return $this;
    }

    public function getAttributeType(): ?AttributeType
    {
        return $this->attributeType;
    }

    public function setAttributeType(?AttributeType $attributeType): self
    {
        $this->attributeType = $attributeType;

        return $this;
    }
}

<?php

namespace App\Form;

use App\Entity\Armor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArmorFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('AttackPower')
            ->add('DefensePower')
            ->add('HealthPoints')
            ->add('MaximumMana')
            ->add('RegenMana')
            ->add('MoveSpeed')
            ->add('MagicRegen')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Armor::class,
        ]);
    }
}

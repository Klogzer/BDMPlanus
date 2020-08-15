<?php

namespace App\Form;

use App\Entity\Weapon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WeaponFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('AttackPower')
            ->add('DefensePower')
            ->add('CritChance')
            ->add('AttackSpeed')
            ->add('save', SubmitType::class, ['label' => 'submit']);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Weapon::class,
        ]);
    }
}

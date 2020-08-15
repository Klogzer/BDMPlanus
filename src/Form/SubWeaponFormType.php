<?php

namespace App\Form;

use App\Entity\SubWeapon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubWeaponFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('attackPower')
            ->add('defensePower')
            ->add('critChance')
            ->add('moveSpeed')
            ->add('name')
            ->add('save', SubmitType::class, ['label' => 'submit']);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SubWeapon::class,
        ]);
    }
}

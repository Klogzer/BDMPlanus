<?php

namespace App\Form;

use App\Entity\Helmet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HelmetFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('attackPower')
            ->add('defensePower')
            ->add('critChance')
            ->add('maximumMana')
            ->add('magicRegen')
            ->add('attackSpeed')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Helmet::class,
        ]);
    }
}

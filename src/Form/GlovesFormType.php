<?php

namespace App\Form;

use App\Entity\Gloves;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GlovesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('attackPower')
            ->add('defensePower')
            ->add('maximumMana')
            ->add('critChance')
            ->add('magicRegen')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gloves::class,
        ]);
    }
}

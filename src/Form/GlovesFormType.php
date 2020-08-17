<?php

namespace App\Form;

use App\Entity\Gloves;
use App\Entity\ItemGrade;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GlovesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('itemGrade', EntityType::class, [
                'class' => ItemGrade::class,
                'choice_label' => 'name',
            ])
            ->add('attackPower')
            ->add('defensePower')
            ->add('maximumMana')
            ->add('critChance')
            ->add('magicRegen')
            ->add('itemGrade', EntityType::class, [
                'class' => ItemGrade::class,
                'choice_label' => 'name',
            ])
            ->add('save', SubmitType::class, ['label' => 'submit']);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gloves::class,
        ]);
    }
}

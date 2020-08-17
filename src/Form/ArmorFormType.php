<?php

namespace App\Form;

use App\Entity\Armor;
use App\Entity\ItemGrade;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
            ->add('itemGrade', EntityType::class, [
                'class' => ItemGrade::class,
                'choice_label' => 'name',
            ])
            ->add('save', SubmitType::class, ['label' => 'submit']);;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Armor::class,
        ]);
    }
}

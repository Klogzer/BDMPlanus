<?php

namespace App\Form;

use App\Entity\Character;
use App\Entity\CharacterProfession;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CharacterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('level')
            ->add('weapon')
            ->add('profession', EntityType::class, [
                'class' => CharacterProfession::class,
                'choice_label' => 'name',
            ])
            ->add('subWeapon')
            ->add('helmet')
            ->add('armor')
            ->add('gloves')
            ->add('shoes')
            ->add('save', SubmitType::class, ['label' => 'submit']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Character::class,
        ]);
    }
}

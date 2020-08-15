<?php

namespace App\Form;

use App\Entity\Armor;
use App\Entity\Character;
use App\Entity\CharacterProfession;
use App\Entity\Gloves;
use App\Entity\Helmet;
use App\Entity\Shoes;
use App\Entity\SubWeapon;
use App\Entity\Weapon;
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
            ->add('profession', EntityType::class, [
                'class' => CharacterProfession::class,
                'choice_label' => 'name',
            ])
            ->add('weapon', EntityType::class, [
                'class' => Weapon::class,
                'choice_label' => 'name',
            ])
            ->add('subWeapon', EntityType::class, [
                'class' => SubWeapon::class,
                'choice_label' => 'name',
            ])
            ->add('helmet', EntityType::class, [
                'class' => Helmet::class,
                'choice_label' => 'name',
            ])
            ->add('armor', EntityType::class, [
                'class' => Armor::class,
                'choice_label' => 'name',
            ])
            ->add('gloves', EntityType::class, [
                'class' => Gloves::class,
                'choice_label' => 'name',
            ])
            ->add('shoes', EntityType::class, [
                'class' => Shoes::class,
                'choice_label' => 'name',
            ])
            ->add('save', SubmitType::class, ['label' => 'submit']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Character::class,
        ]);
    }
}

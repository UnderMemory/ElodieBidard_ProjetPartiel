<?php

namespace App\Form;

use App\Entity\Roman;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RomanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('couverture')
            ->add('prix')
            ->add('genre')
            ->add('resume')
            ->add('relation')
            ->add('auteur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Roman::class,
        ]);
    }
}

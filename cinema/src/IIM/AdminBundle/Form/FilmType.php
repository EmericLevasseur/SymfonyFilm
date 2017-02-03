<?php
// src/IIM/AdminBundle/Form/FilmType.php
namespace IIM\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('synopsis')
            ->add('dateSortie')
            ->add('realisateur')
            ->add('genre')
            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
        ;
    }
}

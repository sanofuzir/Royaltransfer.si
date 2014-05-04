<?php

namespace royaltransfer\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',null, array(
                'attr'  => array('class' => 'span1'),
                'label' => 'Naslov:'
            ))
            ->add('description', 'textarea', array(
                'attr'  => array('class' => 'span2', 'rows' => 15, 'cols'=>80),
                'label' => 'Opis:'
            ))
            ->add('video',null, array(
                'attr'  => array('class' => 'span1'),
                'label' => 'Povezava'
            ))
            ->add('file', 'file', array(
                'attr'  => array('class' => 'span2'),
                'label' =>  'Slika'
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'royaltransfer\CoreBundle\Entity\Tour'
        ));
    }

    public function getName()
    {
        return 'tour';
    }
}

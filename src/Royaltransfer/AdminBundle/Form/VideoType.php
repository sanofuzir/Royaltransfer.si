<?php

namespace royaltransfer\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',null, array(
                'attr'  => array('class' => 'span3'),
                'label' => 'Naslov:'
            ))
            ->add('link',null, array(
                'attr'  => array('class' => 'span1'),
                'label' => 'Povezava'
            ))
            ->add('file', 'file', array(
                'attr'  => array('class' => 'span2'),
                'label' =>  'Datoteka'
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'royaltransfer\CoreBundle\Entity\Video'
        ));
    }

    public function getName()
    {
        return 'video';
    }
}

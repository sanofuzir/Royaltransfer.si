<?php

namespace royaltransfer\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description', 'textarea', array(
                'attr'  => array('class' => 'span2', 'rows' => 15, 'cols'=>80),
                'label' => 'Opis'
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
            'data_class' => 'royaltransfer\CoreBundle\Entity\Image'
        ));
    }

    public function getName()
    {
        return 'image';
    }
}

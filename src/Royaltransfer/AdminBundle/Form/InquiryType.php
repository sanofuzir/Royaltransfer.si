<?php

namespace royaltransfer\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null, array(
                'attr'  => array('class' => 'span3'),
                'label' => 'Ime*:'
            ))
            ->add('company',null, array(
                'attr'  => array('class' => 'span3'),
                'label' => 'Podjetje:'
            ))
            ->add('telephone',null, array(
                'attr'  => array('class' => 'span3'),
                'label' => 'Telefon*:'
            ))
            ->add('email',null, array(
                'attr'  => array('class' => 'span3'),
                'label' => 'Email*:'
            ))
            ->add('text', 'textarea', array(
                'attr'  => array('class' => 'span3', 'rows' => 15, 'cols'=>80),
                'label' => 'Vnos besedila:'
            ))
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'royaltransfer\CoreBundle\Entity\Inquiry'
        ));
    }

    public function getName()
    {
        return 'inquiry';
    }
}

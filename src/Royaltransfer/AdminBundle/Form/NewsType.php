<?php

namespace royaltransfer\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null, array(
                'attr'  => array('class' => 'span1'),
                'label' => 'Naslov novice'
            ))
            ->add('text', 'textarea', array(
                'attr'  => array('class' => 'span2', 'rows' => 15, 'cols'=>80),
                'label' => 'Novica'
            ))
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'royaltransfer\CoreBundle\Entity\News'
        ));
    }

    public function getName()
    {
        return 'news';
    }
}

<?php

namespace Prueba\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DefectoType extends AbstractType
{

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Prueba\MainBundle\Entity\Defecto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'prueba_mainbundle_defecto';
    }
}

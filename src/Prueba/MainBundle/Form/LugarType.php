<?php

namespace Prueba\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LugarType extends AbstractType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('lat','number',array(
				'label'=> 'Latitud',
				'required'=>true,
				'invalid_message'=> 'Se necesita la latitud.'
		))
		->add('lon','number',array(
				'label'=> 'Longitud',
				'required'=>true,
				'invalid_message'=> 'Se necesita la longitud.'
		))
		->add('fecha','date',array('label'=> 'Fecha',
				'required'=>true,
				'invalid_message'=> 'Se necesita una fecha.'
		))
		->add('hora','time',array('label'=> 'Hora',
				'required'=>true,
				'invalid_message'=> 'Se necesita la hora.'
		))
		->add('enviar','submit',array('label'=> 'Comprobar'))
		;
	}
	

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Prueba\MainBundle\Entity\Lugar'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'prueba_mainbundle_lugar';
    }
}

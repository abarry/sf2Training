<?php

namespace Sensio\Bundle\TrainingBundle\Contact;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExperienceType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sensio\Bundle\TrainingBundle\Contact\Experience'
        ));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('job_name')
            ->add('date_start')
            ->add('date_end');
    }

    public function getName()
    {
        return 'Experience';
    }
}
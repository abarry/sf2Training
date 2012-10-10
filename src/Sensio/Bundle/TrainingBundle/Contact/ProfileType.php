<?php

namespace Sensio\Bundle\TrainingBundle\Contact;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sensio\Bundle\TrainingBundle\Contact\Profile'
        ));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('languages')
            ->add('experiences', 'collection', array(
                'type'      => new ExperienceType(),
                'allow_add' => false
            ));
    }

    public function getName()
    {
        return 'Profile';
    }
}
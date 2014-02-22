<?php
// src/MyWeb/SiteBundle/Form/EnquiryType.php

namespace MyWeb\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email');
        $builder->add('body', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}

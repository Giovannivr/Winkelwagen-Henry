<?php
// src/Form/RegistrationType.php

namespace App\Repository;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('lang', null, [
'placeholder' => 'This field is required!!!!',
'required' => true,
'label' => 'Language UK / NL',
])
->add('company', null, [
'attr' => ['placeholder' => 'This field is required!!!!'],
'required' => true,
'label' => 'Company Name!',
])
->add('firstname', null, [
'required' => true,
])
->add('insertionname')
->add('lastname', null, [
'required' => true,
])
;
}

public function getParent()
{
return 'FOS\UserBundle\Form\Type\RegistrationFormType';

// Or for Symfony < 2.8
// return 'fos_user_registration';
}

public function getBlockPrefix()
{
return 'app_user_registration';
}

/*
// For Symfony 2.x
public function getName()
{
return $this->getBlockPrefix();
}*/

}
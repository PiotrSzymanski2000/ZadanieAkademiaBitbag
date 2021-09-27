<?php

namespace App\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;

interface ProductTypeExtensionInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options);
}

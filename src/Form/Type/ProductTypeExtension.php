<?php

namespace App\Form\Type;

use App\Entity\Product\ProductInterface;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('color',ChoiceType::class, [
                'choices'  => [
                    'Brak' => null,
                    'Red' => ProductInterface::PRODUCT_COLOR_RED,
                    'Blue' => ProductInterface::PRODUCT_COLOR_BLUE,
                    'Green' => ProductInterface::PRODUCT_COLOR_GREEN,
                    ]
            ])
        ;

    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];

    }
}

<?php

namespace Unit\Form\Type;

use App\Entity\Product\ProductInterface;
use App\Form\Type\ProductTypeExtension;
use Hoa\Compiler\Llk\Rule\Choice;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilder;

class ProductTypeExtensionTest extends TestCase
{
    /**
     * @var MockObject|FormBuilder
     */
    private $builder;

    /**
     * @var ProductTypeExtension
     */
    private $productType;

    protected function setUp(): void
    {
        $this->builder = $this->createMock(FormBuilder::class);

        $this->productType = new ProductTypeExtension();
    }

    public function test_it_builds_form(): void
    {
        $this->builder
            ->expects($this->once())
            ->method('add')
            ->with('color', ChoiceType::class, [

                'choices'  => [
                    'Brak' => null,
                    'Red' => ProductInterface::PRODUCT_COLOR_RED,
                    'Blue' => ProductInterface::PRODUCT_COLOR_BLUE,
                    'Green' => ProductInterface::PRODUCT_COLOR_GREEN,
            ]])
            ->willReturn($this->builder,[]);


        $this->productType->buildForm($this->builder, []);
    }

    public function test_it_returns_product_type_class(): void
    {
        $productExt = new ProductTypeExtension();

        $this->assertSame(
            [ProductType::class],
            $productExt->getExtendedTypes()
        );
    }
}

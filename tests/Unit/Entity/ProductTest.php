<?php

namespace Unit\Entity;

use App\Entity\Product\Product;
use Monolog\Test\TestCase;

class ProductTest extends TestCase
{
    public function test_returns_color_of_product()
    {
        $product = new Product();

        $product->setColor('Red');

        $this->assertSame(
            'Red',
            $product->getColor()
        );
    }

}

<?php

namespace App\Tests\Behat\Context;


use App\Tests\Behat\Pages\CreateProductPageInterface;
use Behat\Behat\Context\Context;

class ProductContext implements Context
{
    /**
     * @var CreateProductPageInterface
     */
    private $creteProductPage;

    public function __construct(CreateProductPageInterface $creteProductPage)
    {
        $this->creteProductPage = $creteProductPage;
    }

    /**
     * @When I set color to :color
     */
    public function iSetColorTo($color)
    {
        $this->creteProductPage->setColor($color);
    }

}

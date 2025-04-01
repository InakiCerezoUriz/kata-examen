<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    /**
     * @test
     */
    public function addProductWithoutNumberReturnsProductx1(): void
    {
        $product = new Cart();

        $result = $product->useCart('Añadir pan');

        $this->assertEquals("pan x1", $result);
    }

    /**
     * @test
     */
    public function addProductSpecifyingAmountOf2ReturnsProductx2(): void
    {
        $product = new Cart();

        $result = $product->useCart('Añadir pan 2');

        $this->assertEquals("pan x2", $result);
    }

    /**
     * @test
     */
    public function addTwoDifferentProductsReturnsBothProducts(): void
    {
        $product = new Cart();

        $product->useCart('Añadir pan 1');
        $result = $product->useCart('Añadir leche 1');

        $this->assertEquals("pan x1, leche x1", $result);
    }


}

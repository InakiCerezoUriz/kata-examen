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
    public function addBreadSpecifyingAmountOf2ReturnsBreadx2(): void
    {
        $product = new Cart();

        $result = $product->useCart('Añadir pan 2');

        $this->assertEquals("pan x2", $result);
    }

    /**
     * @test
     */
    public function addMilkSpecifyingAmountOf2ReturnsMilkx2(): void
    {
        $product = new Cart();

        $result = $product->useCart('Añadir leche 2');

        $this->assertEquals("leche x2", $result);
    }


}

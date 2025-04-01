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


}

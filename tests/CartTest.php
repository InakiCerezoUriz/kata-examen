<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    /**
     * @test
     */
    public function addBreadWithoutNumber(): void
    {
        $product = new Cart();

        $result = $product->useCart('Añadir pan');

        $this->assertEquals("pan x1", $result);
    }

    /**
     * @test
     */
    public function addMilkWithoutNumber(): void
    {
        $product = new Cart();

        $result = $product->useCart('Añadir leche');

        $this->assertEquals("leche x1", $result);
    }

    /**
     * @test
     */
    public function addRiceWithoutNumber(): void
    {
        $product = new Cart();

        $result = $product->useCart('Añadir arroz');

        $this->assertEquals("arroz x1", $result);
    }


}

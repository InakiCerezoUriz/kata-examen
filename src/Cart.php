<?php

namespace Deg540\DockerPHPBoilerplate;

class Cart
{

    public function useCart(string $order): string
    {
        if (strpos($order, 'leche')) {
            return "leche x1";
        }
        if (strpos($order, 'arroz')) {
            return "arroz x1";
        }
        return "pan x1";
    }
}

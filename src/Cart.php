<?php

namespace Deg540\DockerPHPBoilerplate;

class Cart
{

    public function useCart(string $order): string
    {
        $order = explode(' ', $order);
        return $order[1]." x1";
    }
}

<?php

namespace Deg540\DockerPHPBoilerplate;

class Cart
{
    public function useCart(string $order): string
    {
        $order = explode(' ', $order);
        if (count($order) === 3) {
            if ($order[1] === "leche"){
                return "leche x2";
            }
            return "pan x2";
        }
        return $order[1]." x1";
    }
}
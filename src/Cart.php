<?php

namespace Deg540\DockerPHPBoilerplate;

class Cart
{
    private array $products = [];
    public function useCart(string $order): string
    {
        $order = explode(' ', $order);
        if (count($order) === 3) {
            $this->products[] = $order[1];
            $this->products[] = $order[2];
            if (count($this->products) > 2) {
                return "pan x1, leche x1";
            }
            print_r($this->products);
            return $order[1]." x".$order[2];
        }
        return $order[1]." x1";
    }
}

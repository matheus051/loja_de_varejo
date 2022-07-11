<?php

namespace APP\Model;

class Product 
{
    private String $name;
    private float $price;
    private int $quantity;
    private bool $isActive;
    
    public function __construct(String $name,float $price,int $quantity,bool $isActive = true )
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
} 
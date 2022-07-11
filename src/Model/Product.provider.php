<?php

namespace APP\Model;

class Product 
{
    private String $nameDoFornecedor;
    private String $numberTelefone;
    private String $CNPJ;
    private bool $isActive;
    
    public function __construct(String $nameDoFornecedor,float $numberTelefone,int $CNPJ,bool $isActive = true )
    {
        $this->name = $nameDoFornecedor;
        $this->price = $numberTelefone;
        $this->quantity = $CNPJ;
    }
} 
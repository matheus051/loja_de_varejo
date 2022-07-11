<?php
namespace APP\Model;

class Validation
{
    public static function validateName(string $name):bool
    {
        return mb_strlen($name) > 4;
    }
    public static function validateNumbler(float $number):bool
    {
        return $number > 0;
    }
}
class ValidationProvider
{
    public static function validateNameDoFornecedor(string $name):bool
    {
        return mb_strlen($name) > 3;
    }
    public static function validateNumblerNumberTelefone(float $number):bool
    {
        return $number > 13;
    }
    public static function validateCNPJ(float $number):bool
    {
        return $number > 14;
    }
     
}
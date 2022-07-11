<?php
namespace APP\Controller;

use APP\Model\Product;
use APP\Model\Validation;
use APP\Utils\Redirect; 



require_once '../../vendor/autoload.php';

if (empty($_POST))  {
    Redirect::redirect(
        message:'Requisição inválida!!!',
        type:'error'
    );
}

$productNameDoFornecedor = $_POST["nameDoFornecedor"];
$productNumberTelefone = $_POST["numberDeTelefone"];
$productCNPJ = $_POST["CNPJ"];

$error = array();

if(!Validation::validateName($productNameDoFornecedor)){
    array_push($error, "O Nome do produto deve conter 5 ou mais caracteres!!!");
}

if(!Validation::validateNumbler($productNumberTelefone)){
    array_push($error,"O Numero de telefone deve ter 13 Numeros !!!");
}

if(!Validation::validateNumbler($productCNPJ)){
    array_push($error,"A quantidade do CNPJ e de 14 Digitos !!!");

if($error) //Se existirem erros 
    Redirect::Redirect(
        message: $error,
        type: 'warning'

);

}

        
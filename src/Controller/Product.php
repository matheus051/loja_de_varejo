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

$productName = $_POST["name"];
$productPrice = (float) $_POST["price"];
$productQuantity = (float) $_POST["quantity"];

$error = array();

if(!Validation::validateName($productName)){
    array_push($error, "O Nome do produto deve conter 5 ou mais caracteres!!!");
}

if(!Validation::validateNumbler($productPrice)){
    array_push($error,"O preço do produto deve ser maior que 0 !!!");
}

if(!Validation::validateNumbler($productQuantity)){
    array_push($error,"A quantidade do produto deve ser maior que 0 !!!");

if($error) //Se existirem erros 
    Redirect::Redirect(
        message: $error,
        type: 'warning'

);

}else{
    $product = new Product(
        name:$productName,
        quantity:$productQuantity,
        price:$productPrice
    );
    // Salva no banco de dados

    Redirect::Redirect(
        message:"cadastrado com sucesso✅✅!!!"
    );

}



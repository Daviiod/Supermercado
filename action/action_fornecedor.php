<?php
use App\Fornecedor;
    require('../vendor/autoload.php');

    $opcao = $_GET['action'];
    $fornecedor = new Fornecedor;
    switch($opcao){
        case 'cadastrar' :
            $fornecedor->nome = $_POST['nome'];
            $fornecedor->cnpj = $_POST['cnpj'];
            $fornecedor->telefone = $_POST['telefone'];
            $fornecedor->email = $_POST['email'];
            $fornecedor->endereco = $_POST['endereco'];
            $fornecedor->cadastrar();
            header('location: /supermercado/view/fornecedor/listar.php');
        break;
        case 'alterar' :

        break;
        case 'excluir' :

        break;
    }
?>
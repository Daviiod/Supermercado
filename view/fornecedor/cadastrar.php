<?php
    require('../../vendor/autoload.php');
    include('../../view/includes/cabecalho.php');
    include('../../view/includes/menu.php');
    include('../../view/includes/rodape.php');
?>
<main class="container mb-5 mt-5">
    <h1 class="text-center">Cadastrar Fornecedor</h1>
        <form action="/supermercado/action/action_fornecedor.php?action=cadastrar" method="POST">
            Nome:<input name="nome" type="text" class="form-control">
            CNPJ:<input name="cnpj" type="text" class="form-control">
            Telefone:<input name="telefone" type="text" class="form-control">
            Email:<input name="email" type="text" class="form-control">
            Endereço:<input name="endereco" type="text" class="form-control mb-5">
            <input  type="submit" value="Cadastrar" class="btn btn-primary form-control mb-5">
        </form>
</main>
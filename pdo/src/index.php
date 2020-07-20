<?php
require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']){

    case "list":
        echo "<h3>Produtos: </h3>";
        foreach ($produto->list() as $value){
            echo 'Id :' . $value['id'] . '<br> Decrição: ' . $value['descricao'] . '<br>';
        }
        break;

    case 'insert':
        $status = $produto->insert('abacaxi');
        if(!$status){
            echo 'Não foi possível executar a operação!';
            return false;
        }
        echo 'Registro inserido com sucesso!';
        break;

    case 'update':
        $produto->update();
        break;

    case 'delete':

        break;
}


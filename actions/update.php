<?php


require_once '../db/db_connect.php';

if(isset($_POST['btn-editar'])):
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $complemento =$_POST['complemento'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $data = $_POST['data'];

    $sql = "UPDATE $tabela SET 
        nome = '$nome',
        cep = '$cep',
        logradouro = '$logradouro',
        complemento = '$complemento',
        numero = '$numero',
        bairro = '$bairro',
        uf = '$uf',
        cidade = '$cidade',
        data = '$data' WHERE id = $id";
    if(mysqli_query($connect, $sql)):
        header('location:../index.php');
    else:
        echo "houve um erro ao cadastrar";
    endif;
else:
    echo "não cadastrou";
endif;


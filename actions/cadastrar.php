<?php


require_once '../db/db_connect.php';

if(isset($_POST['nome'])):

    $nome = $_POST['nome'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $complemento =$_POST['complemento'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $data = $_POST['data'];

    $sql = "INSERT INTO $tabela (
        nome,
        cep,
        logradouro,
        complemento,
        numero,
        bairro,
        uf,
        cidade,
        data) VALUES (
            '$nome',
            '$cep',
            '$logradouro',
            '$complemento',
            '$numero',
            '$bairro',
            '$uf',
            '$cidade',
            '$data'
        )";
    if(mysqli_query($connect, $sql)):
        header('location:../index.php');
    else:
        echo "houve um erro ao cadastrar";
    endif;
else:
    echo "não cadastrou";
endif;



//header ('Location:lista.php');
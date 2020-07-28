<?php


require_once '../db/db_connect.php';

if(isset($_POST['btn-deletar'])):
    $id = $_POST['id'];

    $sql = "DELETE FROM $tabela WHERE ID = '$id'";
    if(mysqli_query($connect, $sql)):
        header('location:../index.php');
    else:
        echo "houve um erro ao Deletar";
    endif;
else:
    echo "não foi possivel deletar o rgistro";
endif;


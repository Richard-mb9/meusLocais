<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "meuslocais";
$tabela = "locais"; //nome da tabela que devrão ser salvo os dados

$connect = mysqli_connect($servername,$username,$password,$db_name);

mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Houve um erro na sua conexão com o banco de dados, 
    verifque se todos os dados estão corretos";
endif;

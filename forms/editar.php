<?php
    include_once '../db/db_connect.php';

    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);
        $sql = "SELECT * FROM locais WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/styles/formulario.css">
    <title>Alterar Local</title>
</head>
<script src="../static/js/forms.js"></script>
<body>
    <div clas="div_conteudo">
        <div class="div_titulo">
            <h1>Alterar Local</h1>
        </div>
        <div class="div_form">
            <form action="../actions/update.php" method="POST">
                <p>
                    <input  type="hidden"  name="id" id="input_id"
                        value="<?php echo $dados['id']; ?>" required>
                </p>
                <p class="item-form" >
                    Nome do local: 
                    <input type="text"  name="nome" id="input_nome"
                        value="<?php echo $dados['nome']; ?>" required>
                </p>
                <p class="item-form" >
                    CEP: 
                    <input type="number"  onblur="pegacep(value)" name="cep" id="input_cep" required
                        value="<?php echo $dados['cep']; ?>" required>
                </p>
                <p class="item-form" >
                    Logradouro: 
                    <input type="text"  name="logradouro"  id="input_logradouro"
                    value="<?php echo $dados['logradouro']; ?>" required>
                </p>
                <p class="item-form" >
                    Bairro: 
                    <input type="text"  name="bairro" id="input_bairro" 
                    value="<?php echo $dados['bairro']; ?>" required>
                </p>
                <p class="item-form" >
                    Cidade: 
                    <input type="text"  name="cidade" id="input_cidade" 
                    value="<?php echo $dados['cidade']; ?>" required>
                </p>
                <p class="item-form" >
                    UF: 
                    <input type="text"  name="uf" id="input_uf" 
                    value="<?php echo $dados['uf']; ?>" required>
                </p>
                <p class="item-form" >
                    Complemento: 
                    <input type="text" name="complemento" id="input_complemento"
                    value="<?php echo $dados['complemento']; ?>" required>
                </p>
                <p class="item-form" >
                    Numero: 
                    <input type="text"  name="numero" id="input_numero" 
                    value="<?php echo $dados['numero']; ?>" required>
                </p>
                <p class="item-form" >
                    Data da Visita: 
                    <input type="date"  name="data" id="input_data" 
                    value="<?php echo $dados['data']; ?>" required>
                </p>

                <button class="btn-submit" name="btn-editar" type="submit">Salvar Alterações</button>
            </form>
        </div>
    </div>
    
</body>
</html>

<script>

    /*function pegacep(CEP){
        const nome = document.getElementById("input_nome")
        const cep = document.getElementById("input_cep")
        const logradouro = document.getElementById("input_logradouro")
        const complemento = document.getElementById("input_complemento")
        const numero = document.getElementById("input_numero")
        const bairro = document.getElementById("input_bairro")
        const cidade = document.getElementById("input_cidade")
        const uf = document.getElementById("input_uf")
        const data = document.getElementById("input_data")

        const url = "actions/endereco.php"
        addEventListener("",function(event){
            event.preventDefault();
        })

        const dados = "cep=" + CEP

        fetch(url,{
            method:"POST",
            body:dados,
            headers: {
             'Content-Type': 'application/x-www-form-urlencoded'
         }
        }).then(function(response){
            return response.json()
        }).then(function(response){
            logradouro.value = response['logradouro']
            bairro.value = response['bairro']
            cidade.value = response['localidade']
            uf.value = response['uf']
        }).catch(error => console.log(error))
    
    }*/

</script>
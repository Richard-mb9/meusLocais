<?php
include_once './db/db_connect.php';


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os Locais</title>
    <link rel="stylesheet" href="static/styles/lista.css">
</head>
<body>
    <div class="div_conteudo">
    <a href="forms/novolocal.php">
        <button class="btn-adicionar">&#10010;  Cadastrar um novo local </button>
    </a>
    <table>
        <thead class="cabecalho">
            <tr >
                <td> Nome do Local</td>
                <td>CEP</td>
                <td>Logradouro</td>
                <td>Complemento</td>
                <td>Numero</td>
                <td>Bairro</td>
                <td>UF</td>
                <td>Cidade</td>
                <td>Data</td>
                <td class="col-actions">Editar</td>
                <td class="col-actions">Deletar</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM locais";
                $resultado = mysqli_query($connect, $sql);
                while($dados = mysqli_fetch_array($resultado)):
            ?>
                <tr class= "<?php
                    if($dados['uf'] == "MG"):
                        echo "uf-mg";
                    endif;
                    ?>">
                    <td><?php echo $dados['nome']; ?> </td>
                    <td><?php echo $dados['cep']; ?> </td>
                    <td><?php echo $dados['logradouro']; ?> </td>
                    <td><?php echo $dados['complemento']; ?> </td>
                    <td><?php echo $dados['numero']; ?> </td>
                    <td><?php echo $dados['bairro']; ?> </td>
                    <td><?php echo $dados['uf']; ?> </td>
                    <td><?php echo $dados['cidade']; ?> </td>
                    <td><?php echo $dados['data']; ?> </td>
                    <td class="col-actions">
                        <a href="forms/editar.php?id=<?php echo $dados['id']; ?>">
                            <button class="btn-editar">&#9998;</button>
                        </a>
                    </td>
                    <td class="col-actions">
                        <form action="actions/delete.php" method="post">    
                            <input type="hidden" 
                                value="<?php echo $dados['id']; ?>" name="id">
                            <button class="btn-deletar" name="btn-deletar" type="submit">
                                &#x1F5D1;&#xFE0F;
                            </button>
                        </form>
                    </td>
                </tr>
                
            <?php endwhile ?>
        </tbody>
    </table>
    </div>
    
</body>
</html>
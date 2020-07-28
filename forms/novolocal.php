
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/styles/formulario.css">
    <title>Novo local</title>
</head>
<script src="../static/js/forms.js"></script>
<body>
    <div clas="div_conteudo">
        <div class="div_titulo">
            <h1>Novo Local</h1>
        </div>
        <div class="div_form">
            <form action="../actions/cadastrar.php" method="POST" onsubmit="form_submit(this); return false;">
                <p class="item-form"> 
                    <label for="">Nome do local:</label> 
                     <input type="text"  value="" name="nome" id="input_nome" required>
                    </p>
                <p class="item-form">
                    <label for="">CEP: </label> 
                    <input type="number" onchange="pegacep(value)"   name="cep"  id="input_cep" required>
                </p>
                <p class="item-form">
                    <label for="">Logradouro: </label> 
                    <input type="text" name="logradouro"  id="input_logradouro" required>
                </p>
                <p class="item-form">
                    <label for="">Complemento:</label>  
                    <input type="text" name="complemento" id="input_complemento" required>
                </p>
                <p class="item-form">
                    <label for="">Numero:</label>  
                    <input type="text" name="numero" id="input_numero" required>
                </p>
                <p class="item-form">
                    <label for="">Bairro:</label>  
                    <input type="text" name="bairro" id="input_bairro" required>
                </p>
                <p class="item-form">
                    <label for="">UF: </label> 
                    <input type="text" name="uf" id="input_uf" required>
                </p>
                <p class="item-form">
                    <label for="">Cidade: </label> 
                    <input type="text" name="cidade" id="input_cidade" required>
                </p>
                
                
                <p class="item-form">
                    <label for="">Data da Visita:</label>  
                    <input type="date" name="data" id="input_data" required>
                </p>
        
                <button class="btn-submit" name="btn-cadastrar" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
    
</body>
</html>

<script>

    /*function form_submit(form){
        const cep = document.getElementById("input_cep")
        if(cep){
            v = cep.value
            if(v.length != 8 ){
                cep.style.borderColor = "red"
                cep.focus()
                alert("CEP Invalido")
                return false
            }
        }
        else{
            alert("Por Favor digite o CEP")
            return false
        }
        form.submit()
    }

    function pegacep(CEP){
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
            if(response['logradouro']){
                logradouro.value = response['logradouro']
                logradouro.readOnly = true
            }
            if(response['bairro']){
                bairro.value = response['bairro']
                bairro.readOnly = true
            }
            if(response['localidade']){
                cidade.value = response['localidade']
                cidade.readOnly = true
            }
            if(response['uf']){
                uf.value = response['uf']
                uf.readOnly = true
            }
            
        }).catch(error => console.log(error))
    
    }*/

</script>
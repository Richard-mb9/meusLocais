function form_submit(form){
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

    const url = "../actions/endereco.php"
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

}
function cadastrar(){
    let email = document.getElementById("exampleInputEmail1").value;
    let nome = document.getElementById("nome").value;
    if(email.length == 0 || nome.length == 0){
        alert("Preencha os dados corretamente");
        Event.preventDefault()
    }else {
        alert("Dados cadastrados com sucesso!");
    }
};
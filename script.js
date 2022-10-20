function cadastrar(){
    let email = document.getElementById("exampleInputEmail1").value;
    if(email.length == 0){
        alert("Campo de email está vazio");
    }else {
        alert("Email cadastrado com sucesso!");
    }
};
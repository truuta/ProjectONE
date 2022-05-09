function validar() {
    var cpf = cadastro.cpf;
    if (cpf.value == "") {
        alert("CPF não informado!");
        cpf.focus();
    }
}
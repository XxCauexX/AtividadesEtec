
    function verifica() {
    let nome = document.getElementById('nome');
    let sobrenome = document.getElementById('sobrenome');
    let idade = document.getElementById('idade');
    let email = document.getElementById('idade');
    let telefone = document.getElementById('telefone');
    let rua = document.getElementById('rua');
    let numero = document.getElementById('numero');
    let bairro = document.getElementById('bairro');
    let cidade = document.getElementById('cidade');

    if (nome.value.length == 0) {
        document.getElementById('nome').style = 'border: 2px solid red';
    } else {
        document.getElementById('nome').style = 'border: 2px solid black';
    }

    if (sobrenome.value.length == 0) {
        document.getElementById('sobrenome').style = 'border: 2px solid red';
    } else {
        document.getElementById('sobrenome').style = 'border: 2px solid black';
    }

    if (idade.value.length == 0) {
        document.getElementById('idade').style = 'border: 2px solid red';
    } else {
        document.getElementById('idade').style = 'border: 2px solid black';
    }

    if (email.value.length == 0) {
        document.getElementById('email').style = 'border: 2px solid red';
    } else {
        document.getElementById('email').style = 'border: 2px solid black';
    }

    if (telefone.value.length == 0) {
        document.getElementById('telefone').style = 'border: 2px solid red';
    } else {
        document.getElementById('telefone').style = 'border: 2px solid black';
    }

    if (rua.value.length == 0) {
        document.getElementById('rua').style = 'border: 2px solid red';
    } else {
        document.getElementById('rua').style = 'border: 2px solid black';
    }

    if (numero.value.length == 0) {
        document.getElementById('numero').style = 'border: 2px solid red';
    } else {
        document.getElementById('numero').style = 'border: 2px solid black';
    }

    if (bairro.value.length == 0) {
        document.getElementById('bairro').style = 'border: 2px solid red';
    } else {
        document.getElementById('bairro').style = 'border: 2px solid black';
    }

    if (cidade.value.length == 0) {
        document.getElementById('cidade').style = 'border: 2px solid red';
        return true;
    } else {
        document.getElementById('cidade').style = 'border: 2px solid black';
    }

    if (cidade.value.length == 0 || bairro.value.length == 0 || numero.value.length == 0 || rua.value.length == 0 || telefone.value.length == 0 || email.value.length == 0 || idade.value.length == 0 || sobrenome.value.length == 0 || nome.value.length == 0 ) {
        return true;
    } else {
        return false;
    }
}  

function btnVerifica() {
    if (verifica() == true) {
        alert('Preencha todos os campos!')
    } else {
        document.getElementById('form1').submit();
    }

}
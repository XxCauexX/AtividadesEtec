var nome = document.getElementById('nome');
var sobrenome = document.getElementById('sobrenome');
var idade = document.getElementById('idade');
var email = document.getElementById('email');
var telefone = document.getElementById('telefone');
var rua = document.getElementById('rua');
var numero = document.getElementById('numero');
var bairro = document.getElementById('bairro');
var cidade = document.getElementById('cidade');
var sexo = document.getElementById('sexo');
var btn = document.getElementById('btnEnviar');

function verifica() {
    if (nome.value.length == 0 ) {
        document.getElementById('nome').style= 'border: 2px solid red ';
    } else {
        document.getElementById('nome').style= 'border: 2px solid black ';
    }

    if (nome.value.length == 0 ) {
        document.getElementById('nome').style= 'border: 2px solid red ';
    } else {
        document.getElementById('nome').style= 'border: 2px solid black ';
    }

    if (sobrenome.value.length == 0 ) {
        document.getElementById('sobrenome').style= 'border: 2px solid red ';
    } else {
        document.getElementById('sobrenome').style= 'border: 2px solid black ';
    }

    if (idade.value.length == 0 ) {
        document.getElementById('idade').style= 'border: 2px solid red ';
    } else {
        document.getElementById('idade').style= 'border: 2px solid black ';
    }

    if (email.value.length == 0 ) {
        document.getElementById('email').style= 'border: 2px solid red ';
    } else {
        document.getElementById('email').style= 'border: 2px solid black ';
    }

    if (telefone.value.length == 0 ) {
        document.getElementById('telefone').style= 'border: 2px solid red ';
    } else {
        document.getElementById('telefone').style= 'border: 2px solid black ';
    }

    if (rua.value.length == 0 ) {
        document.getElementById('rua').style= 'border: 2px solid red ';
    } else {
        document.getElementById('rua').style= 'border: 2px solid black ';
    }

    if (numero.value.length == 0 ) {
        document.getElementById('numero').style= 'border: 2px solid red ';
    } else {
        document.getElementById('numero').style= 'border: 2px solid black ';
    }

    if (bairro.value.length == 0 ) {
        document.getElementById('bairro').style= 'border: 2px solid red ';
    } else {
        document.getElementById('bairro').style= 'border: 2px solid black ';
    }

    if (cidade.value.length == 0 ) {
        document.getElementById('cidade').style= 'border: 2px solid red ';
    } else {
        document.getElementById('cidade').style= 'border: 2px solid black ';
    }

    if (sexo.value.length == 0 ) {
        document.getElementById('sexo').style= 'border: 2px solid red ';
    } else {
        document.getElementById('sexo').style= 'border: 2px solid black ';
    }

}

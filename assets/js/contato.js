let form = document.querySelector('form');
let nome = document.getElementById('name');
let email = document.getElementById('email');
let msg = document.getElementById('msg');
let textMessage = document.getElementById('textMessage');
let textName = document.getElementById('textName');
let textEmail = document.getElementById('textEmail');
let textForm = document.getElementById('textForm');



function validationName(nome) {
    let namePattern = /^([A-Za-zéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ]+([\-'`][A-Za-zéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ]+)?)( [A-Za-zéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ]+([\-'`][A-Za-zéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ]+)?)+$/gm
    return namePattern.test(nome);
}

function validationEmail(email) {
    let emailPattern = /^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/gm
    return emailPattern.test(email);
}

function validationMessage(msg) {
    return msg.trim() === "";
}

nome.addEventListener("keyup", () => {

    if(validationName(nome.value.trim()) !== true) {
        textName.textContent = "Nome e Sobrenome. Não utilizar números."
    } else {
        textName.textContent = " ";
    }
})

email.addEventListener("keyup", () => {
    if(validationEmail(email.value)!== true) {
        textEmail.textContent = "O formato do email deve ser nome@servidor.com"
    } else {
        textEmail.textContent = " "
    }
})


msg.addEventListener("keyup", () => {
    if(validationMessage(msg.value)) {
        textMessage.textContent = "Escreva uma mensagem antes de clicar em enviar."
    } else {
        textMessage.textContent = " ";
    }
})

form.addEventListener("submit", (e) => {
    e.preventDefault();

    if(nome.value == "" &&
    email.value == "" &&
    msg.value == "") {
        textForm.textContent = "Você precisa preencher todos os campos"
    } else if (
        validationName(nome.value) &&
        validationEmail(email.value) &&
        validationMessage(msg.value) !== true
    ) {
        console.log(nome.value);
        console.log(email.value);
        console.log(msg.value);

    } else {
        textForm.textContent = "Você precisa preeencher todos os campos"
        console.log ("Requisição não atendida");
    }

});



// function localizacao(local) {
//     setTimeout (function(){
//         window.location.href=local
//         var ex = document.getElementById('portfolio')
//         console.log(ex.scrollTop)
//         ex.scrollTo(0,100)
//         ex.scrollBy(0,100)
//         ex.scrollTop = 100
//         console.log(ex.scrollTop)
    
//     }, 300)
// }
    
function closeMenu(){
    document.querySelector('#menu').checked=false
}


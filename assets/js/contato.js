let video = document.getElementById("video1");
// let playBtn = document.getElementById("play-btn");
// let pauseBtn = document.getElementById("pause-btn");

let form = document.querySelector("form");
let nome = document.getElementById("name");
let email = document.getElementById("email");
let msg = document.getElementById("msg");
let textMessage = document.getElementById("textMessage");
let textName = document.getElementById("textName");
let textEmail = document.getElementById("textEmail");
let textForm = document.getElementById("textForm");


let videoSrc = document.getElementById("video_src");
if (window.document.body.clientWidth < 1024) {
  videoSrc.src = "./assets/video/nuvi_studio_main_video_no_audio_03.mp4"
} else {
  videoSrc.src = "./assets/video/nuvi_studio_main_video_no_audio.mp4"
}

//BUTTONS CONTROLS



video.addEventListener("click", playPause)

function playPause() {
    if (video1.paused) {
        // If paused, then play
        video1.play();
        // Show pause button and hide play button
        // pauseBtn.style.visibility = "visible";
        // playBtn.style.visibility = "hidden";
      } else {
        // If playing, then pause
        video1.pause();
        // Show play button and hide pause button
        // pauseBtn.style.visibility = "hidden";
        // playBtn.style.visibility = "visible";
      }
}


// playBtn.addEventListener("click", pausePlayHandler, false);
// pauseBtn.addEventListener("click", pausePlayHandler, false);


// function pausePlayHandler(e) {
//     if (video1.paused) {
//       // If paused, then play
//       video1.play();
//       // Show pause button and hide play button
//       pauseBtn.style.visibility = "visible";
//       playBtn.style.visibility = "hidden";
//     } else {
//       // If playing, then pause
//       video1.pause();
//       // Show play button and hide pause button
//       pauseBtn.style.visibility = "hidden";
//       playBtn.style.visibility = "visible";
//     }
//   }




//FORMULARIO

function validationName(nome) {
  let namePattern =
    /^([A-Za-zéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ]+([\-'`][A-Za-zéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ]+)?)( [A-Za-zéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ]+([\-'`][A-Za-zéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ]+)?)+$/gm;
  return namePattern.test(nome);
}

function validationEmail(email) {
  let emailPattern = /^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/gm;
  return emailPattern.test(email);
}

function validationMessage(msg) {
  return msg.trim() === "";
}

nome.addEventListener("keyup", () => {
  if (validationName(nome.value.trim()) !== true) {
    textName.textContent = "Nome e Sobrenome. Não utilizar números.";
  } else {
    textName.textContent = " ";
  }
});

email.addEventListener("keyup", () => {
  if (validationEmail(email.value) !== true) {
    textEmail.textContent = "O formato do email deve ser nome@servidor.com";
  } else {
    textEmail.textContent = " ";
  }
});

msg.addEventListener("keyup", () => {
  if (validationMessage(msg.value)) {
    textMessage.textContent = "Escreva uma mensagem antes de clicar em enviar.";
  } else {
    textMessage.textContent = " ";
  }
});

form.addEventListener("submit", (e) => {
  e.preventDefault();

  if (nome.value == "" && email.value == "" && msg.value == "") {
    textForm.textContent = "Você precisa preencher todos os campos.";
  } else if (
    validationName(nome.value) &&
    validationEmail(email.value) &&
    validationMessage(msg.value) !== true
  ) {
    document.getElementById("contact_form").submit();
  } else {
    textForm.textContent = "Você precisa preeencher todos os campos.";
    console.log("Requisição não atendida");
  }
});

function closeMenu() {
  document.querySelector("#menu").checked = false;
}

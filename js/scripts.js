function btnAwait() {
  const btnStop = document.getElementById('btn-secondary');

  btnStop.innerHTML = `<input type="button" value="Aguarde" disabled class="btn-disable">`;
}
// function btnAwaitLogin() {
//   const btnStop = document.getElementById('btn-wait-login');

//   btnStop.innerHTML = `<input type="button" value="Aguarde" disabled class="btn-disable">`;
// }
// function inputAwaitLogin() {
//   const inputLogin = document.getElementById('btn-wait-login');

//   inputLogin.addEventListener('click', btnAwaitLogin(), false);
// }

function btnAwaitRegister() {
  const btnStop = document.getElementById('btn-wait-register');

  btnStop.innerHTML = `<input type="button" value="Aguarde" disabled class="btn-disable">`;
}

function waitLogout() {
  const btnStop = document.getElementById('logout');

  btnStop.innerHTML = `<div class="logout-um"><h1>Saindo...</h1></div>`;
}

function carregando() {
  const btnStop = document.getElementById('logout');

  btnStop.innerHTML = `<div class="logout-um"><h1>Carregando...</h1></div>`;
}

// Botão movimentar slide
const rightButtons = Array.from(document.getElementsByClassName('slideRight'));
const leftButtons = Array.from(document.getElementsByClassName('slideLeft'));
const containers = Array.from(document.getElementsByClassName('container'));

let index = 0;
for (const rightButton of rightButtons) {
    const container = containers[index];
    rightButton.addEventListener("click", function () {
        container.scrollLeft += 150;
    });
    index++;
}

index = 0;
for (const leftButton of leftButtons) {
    const container = containers[index];
    leftButton.addEventListener("click", function () {
        container.scrollLeft -= 150;
    });
    index++;
}
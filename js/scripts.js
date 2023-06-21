function btnAwait() {
  const btnStop = document.getElementById('btn-secondary');

  btnStop.innerHTML = `<input type="button" value="Aguarde" disabled class="btn-disable">`;
}

function btnAwaitLogin() {
  const btnStop = document.getElementById('btn-wait-login');

  btnStop.innerHTML = `<input type="button" value="Aguarde" disabled class="btn-disable">`;
}

function waitLogout() {
  const btnStop = document.getElementById('logout');

  btnStop.innerHTML = `<div class="logout-um"><h1>Saindo...</h1></div>`;
}

// Botão movimentar slide
const buttonRight = document.getElementById('slideRight');
const buttonLeft = document.getElementById('slideLeft');

buttonRight.onclick = function () {
  document.getElementById('container').scrollLeft += 600;
};
buttonLeft.onclick = function () {
  document.getElementById('container').scrollLeft -= 600;
};
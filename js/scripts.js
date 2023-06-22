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
const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
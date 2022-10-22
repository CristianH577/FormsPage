const formRequest = document.querySelector('#form-request');
const data = document.querySelectorAll('#form-request > ul');
const next = document.querySelectorAll('#form-request > ul button.next');
const previous = document.querySelectorAll('#form-request > ul button.previous');

//disabled no show elements
const dataInputs = [];
for (let i = 1; i < data.length; i++) {
  dataInputs[i] = data[i].querySelectorAll('input, select');
  StatusInputs(i, true);
}
console.log(data.length);

//buttons events
for (let i = 0; i < next.length; i++) {
  next[i].onclick = function () {
    if (formRequest.checkValidity()) {
      formRequest.classList.remove('was-validated');
      data[i].style.display = 'none';

      StatusInputs(i+1, false);
      data[i+1].classList.remove('d-none');
      data[i+1].style.display = 'flex';
    }else{
      formRequest.classList.add('was-validated');
    }
  }
}
previous[0].style.display = 'none';
for (let i = 0; i < previous.length; i++) {
  previous[i].onclick = function () {
    data[i].style.display = 'none';
    StatusInputs(i, true);

    data[i-1].style.display = 'flex';
  }
}

//events of each part
const modeSelect1 = document.querySelector('#modeSelect1');
const modePart1 = document.querySelector('#modePart1');

if (!!modeSelect1) {
  modeSelect1.onchange = function () {
    if (modeSelect1.value == '') {
      modePart1.style.clipPath = 'polygon(0 0, 100% 0, 100% 0, 0 0)';
    }else{
      modePart1.style.clipPath = 'polygon(0 0, 100% 0, 100% 100%, 0 100%)';
    }
  }
}

const submodeSelect1 = document.querySelector('#submodeSelect1');
const submodePart1 = document.querySelector('#submodePart1');

if (!!submodeSelect1) {
  submodeSelect1.onchange = function () {
    if (submodeSelect1.value == '') {
      submodePart1.style.clipPath = 'polygon(0 0, 100% 0, 100% 0, 0 0)';
    }else{
      submodePart1.style.clipPath = 'polygon(0 0, 100% 0, 100% 100%, 0 100%)';
    }
  }
}

//functions
function StatusInputs(b, boolean) {
  dataInputs[b].forEach(element => {
    element.disabled = boolean;
  });
}

//bootstrap validation
/* -------------------- -------------------- -------------------- */
(() => {
    'use strict';
  
    const forms = document.querySelectorAll('.needs-validation');
  
    Array.prototype.slice.call(forms).forEach((form) => {
      form.addEventListener('submit', (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
  /* -------------------- -------------------- -------------------- */
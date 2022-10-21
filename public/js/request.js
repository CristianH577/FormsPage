const formRequest = document.querySelector('#form-request');
const data = document.querySelectorAll('#form-request > ul');
const next = document.querySelectorAll('#form-request > ul button.next');
const previous = document.querySelectorAll('#form-request > ul button.previous');
const modes = [mode, submode, 1];

//disabled no show elements
const firstActiveMode = modes.findIndex(element => element == 1);
const dataInputs = [];
for (let i = 0; i < data.length; i++) {
  dataInputs[i] = data[i].querySelectorAll('input, select');
  if (i != firstActiveMode) {
    StatusInputs(i, true);
  }
}

//buttons events
for (let i = 0; i < next.length; i++) {
  next[i].onclick = function () {
    if (formRequest.checkValidity()) {
      formRequest.classList.remove('was-validated');
      data[i].style.display = 'none';
      StatusInputs(i+1, false);
  
      if (modes[i+1] == '1') {
        data[i+1].classList.remove('d-none');
        data[i+1].style.display = 'flex';
      }else{
        data[2].classList.remove('d-none');
        data[2].style.display = 'flex';
      }
    }else{
      formRequest.classList.add('was-validated');
    }
  }
}
for (let i = 0; i < previous.length; i++) {
  previous[i].onclick = function () {
    data[i+1].style.display = 'none';
    StatusInputs(i+1, true);
    if (modes[i] == '1') {
      data[i].style.display = 'flex';
    }else{
      data[0].style.display = 'flex';
    }
  }
}

//events of each part
const data1Select1 = document.querySelector('#data1Select1');
const data1Part1 = document.querySelector('#data1Part1');

data1Select1.onchange = function () {
  if (data1Select1.value == '') {
    data1Part1.style.clipPath = 'polygon(0 0, 100% 0, 100% 0, 0 0)';
  }else{
    data1Part1.style.clipPath = 'polygon(0 0, 100% 0, 100% 100%, 0 100%)';
  }
}

const data2Select1 = document.querySelector('#data2Select1');
const data2Part1 = document.querySelector('#data2Part1');

data2Select1.onchange = function () {
  if (data2Select1.value == '') {
    data2Part1.style.clipPath = 'polygon(0 0, 100% 0, 100% 0, 0 0)';
  }else{
    data2Part1.style.clipPath = 'polygon(0 0, 100% 0, 100% 100%, 0 100%)';
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
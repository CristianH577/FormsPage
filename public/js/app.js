
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
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


//home
/* -------------------- -------------------- -------------------- */
const choice1 = document.querySelector('#choice1');
const choiceI1 = document.querySelectorAll('#choice1 input');
const choice2 = document.querySelector('#choice2');
const choiceI2 = document.querySelectorAll('#choice2 input');
const choice3 = document.querySelector('#choice3');
const choiceI3 = document.querySelectorAll('#choice3 input');

choiceI1.forEach(element => {
  element.onclick = function () {
    choice1.style.display = 'none';
    choice2.style.cssText = 'display: block !important;';
  }
});
choiceI2.forEach(element => {
  element.onclick = function () {
    choice2.style.display = 'none';
    choice3.style.cssText = 'display: block !important;';
  }
});
choiceI3.forEach(element => {
  element.onclick = function () {
    document.form.submit();
  }
});
/* -------------------- -------------------- -------------------- */


//request
/* -------------------- -------------------- -------------------- */
const data1 = document.querySelector('#data1');
const next1 = document.querySelector('#data1 button .next');

const data2 = document.querySelector('#data2');
const next2 = document.querySelector('#data2 button.next');
const previous2 = document.querySelector('#data2 button .previous');

const data3 = document.querySelector('#data3');
const next3 = document.querySelector('#data3 button .next');
const previous3 = document.querySelector('#data3 button .previous');

// next1.onclick = function () {
  
// }

next2.onclick = function () {
  data2.style.cssText = 'display: none !important;';
  data3.style.cssText = 'display: block !important;';
}
console.log(d1,d2,d3);
/* -------------------- -------------------- -------------------- */
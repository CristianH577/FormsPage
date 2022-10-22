const formView = document.querySelector('#formView');
const data = document.querySelectorAll('#formView > ul');
const buttons = document.querySelectorAll('#formView > ul button');

//disabled no show elements
const dataInputs = [];
for (let i = 0; i < data.length; i++) {
  dataInputs[i] = data[i].querySelectorAll('input, select');
  StatusInputs(i, true);
}
buttons.forEach(element => {
  element.style.display = 'none';
});

//functions
function StatusInputs(b, boolean) {
  dataInputs[b].forEach(element => {
    element.disabled = boolean;
  });
}

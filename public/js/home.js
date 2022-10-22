const choice = document.querySelectorAll('#formSelect > div');
const choiceB = [], choiceI = [];
const back = document.querySelectorAll('#formSelect > div .back');

window.onload = choice[0].style.cssText = 'transform: rotateY(0);';

for (let i = 0; i < choice.length; i++) {
  choiceB[i] = choice[i].querySelectorAll('.formB');

  if (i != choice.length-1) {
    choiceB[i].forEach(element => {
      // element.style.display = 'none';
      element.onclick = function () {
        element.querySelector('input').checked = 'true';
        choice[i].style.transform = 'rotateY(90deg)';
        setTimeout(() => {
          choice[i].style.display = 'none';
          choice[i+1].classList.remove('d-none');
          choice[i+1].style.display = 'block';
        }, 1000);
        setTimeout(() => choice[i+1].style.transform = 'rotateY(0)', 1100);
      }
    });
  }else{
    choiceB[i].forEach(element => {
      element.onclick = function () {
        element.querySelector('input').checked = 'true';
        document.formSelect.submit();
      }
    });
  }

  if (i < back.length) {
    back[i].onclick = function () {
        choice[i+1].style.transform = 'rotateY(90deg)';
        setTimeout(() => {
          choice[i+1].style.display = 'none';
          choice[i].style.display = 'block';
        }, 1000);
        setTimeout(() => choice[i].style.transform = 'rotateY(0)', 1100);
    }
  }
}
const text = document.querySelector('.fancy');
const strText = text.textContent;
const splitText = strText.split("");
text.textContent = "";

for (let i = 0; i < splitText.length; i++) {
    text.innerHTML += "<span>" + splitText[i] + "</span>";
}

let char = 0;
let timer = setInterval(onTick, 50);

function onTick() {
    const span = text.querySelectorAll('span')[char];
    span.classList.add('anim');
    char++
    if(char === splitText.length) {
        complete();
        return;
    }
}

function complete() {
    clearInterval(timer);
    timer = null;
}

const alertGo = document.querySelector('.alert');

function clearAlert() {
    if (alertGo) {
        alertGo.style.display ="none"
    }
}

setTimeout(clearAlert, 5000);

const emailField = document.querySelector('#email-form');
const submitButton = document.querySelector('.email-button');
function returnToPreviousPage() {
    window.history.back();
}
function clearField() {
    if (alertGo.classList.contains('alert-success')) {
        emailField.value="";
    }
    if (alertGo.classList.contains('alert-danger')) {
        returnToPreviousPage();
        return false;
    }
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
}

submitButton.addEventListener('submit', clearField());
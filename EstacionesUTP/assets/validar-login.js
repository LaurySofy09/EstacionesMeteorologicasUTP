/*var username = getElementById('user');
var password = getElementById('pwd');
username.oninvalid = function(event) {
    event.target.setCustomValidity('Username should only contain lowercase letters. e.g. john');
}
password.oninvalid = function(event) {
    event.target.setCustomValidity('Username should only contain lowercase letters. e.g. john');
}
*/
const form  = document.getElementsById('loginform');

const user = document.getElementById('user');
const userError = document.getElementById('errorMensaje');
//const emailError = document.querySelector('#mail + span.error');

user.addEventListener('input', function (event) {

  si (user.validity.valid) {

    userError.innerHTML = '';
    userError.className = 'error';
  } else {

    showError();
  }
});

form.addEventListener('submit', function (event) {

  if(!user.validity.valid) {

    showError();

    event.preventDefault();
  }
});

function showError() {
  if(user.validity.valueMissing) {

    userError.textContent = 'Introduzca su cédula por favor.';
  } /*else if(user.validity.typeMismatch) {

    userError.textContent = 'El valor introducido debe ser una dirección de correo electrónico.';
  } else if(user.validity.tooShort) {

    userError.textContent = 'El correo electrónico debe tener al menos ${ user.minLength } caracteres; ha intruducido ${ user.value.length }.';
  }*/

  emailError.className = 'error active';
}
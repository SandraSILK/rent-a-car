const validation = require('./validation');
const _ = require('lodash');

let Validation = validation.Validation;
let valid = new Validation();

const first_name = document.getElementById('js-first-name');
const last_name = document.getElementById('js-last-name');
const tel = document.getElementById('js-tel');
const email = document.getElementById('js-email').value;
const password = document.getElementById('js-password').value;
const confirm = document.getElementById('js-password-confirm').value;

first_name.addEventListener('input', _.debounce(checkText, 500));
last_name.addEventListener('input', _.debounce(checkText, 500));

function checkText() {
    if (valid.checkText(first_name.value)) {
        valid.template(first_name, 'Oh nie! Imię jest inwalidą');
    }

    if (valid.checkText(last_name.value)) {
        valid.template(last_name, 'Oh nie! Imię jest inwalidą');
    }
}

// document.getElementById('js-form-register').addEventListener('submit', function(event) {
//     event.preventDefault();

//     const first_name = document.getElementById('js-first-name');
//     const last_name = document.getElementById('js-last-name');
//     const tel = document.getElementById('js-tel');
//     const email = document.getElementById('js-email').value;
//     const password = document.getElementById('js-password').value;
//     const confirm = document.getElementById('js-password-confirm').value;

//     let Validation = validation.Validation;
//     let valid = new Validation();

//     if (valid.checkText(first_name.value)) {
//         valid.template(first_name, 'Oh nie! Imię jest inwalidą');
//     }

//     if (valid.checkText(last_name.value)) {
//         valid.template(last_name, 'Oh nie! Nazwisko nie jest poprawne!');
//     }

//     if (valid.checkTel(tel.value)) {
//         valid.template(tel, 'Oh nie! Numer telefonu nie jest poprawny!');
//     }
//     // form.checkName(last_name);
//     // form.checkTel(tel);
//     // form.checkEmail(email);
//     // form.checkConfirm(password, confirm);

// })
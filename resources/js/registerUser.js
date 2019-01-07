const validation = require('./validation');
const _ = require('lodash');

let Validation = validation.Validation;
let valid = new Validation();

const firstName = document.getElementById('js-first-name');
const lastName = document.getElementById('js-last-name');
const tel = document.getElementById('js-tel');
const email = document.getElementById('js-email');
const password = document.getElementById('js-password');
const confirm = document.getElementById('js-password-confirm');

firstName.addEventListener('input', _.debounce(checkFirstName, 500));
lastName.addEventListener('input', _.debounce(checkLastName, 500));
tel.addEventListener('input', _.debounce(checkTel, 500));
email.addEventListener('input', _.debounce(checkEmail, 500));

function checkFirstName() {
    if (valid.checkText(firstName.value)) {
        valid.template(firstName, 'Imię nie jest poprawne.');
    } else {
        valid.removeTemplate(firstName);
    }
}

function checkLastName() {
    if (valid.checkText(lastName.value)) {
        valid.template(lastName, 'Nazwisko nie jest poprawne.');
    } else {
        valid.removeTemplate(lastName);
    }
}

function checkTel() {
    if (valid.checkTel(tel.value)) {
        valid.template(tel, 'Numer telefonu nie jest poprawny!');
    } else {
        valid.removeTemplate(tel);
    }
}

function checkEmail() {
    if (valid.checkEmail(email.value)) {
        valid.template(email, 'Podany adres nie jest poprawny.');
    } else {
        valid.removeTemplate(email);
    }
}
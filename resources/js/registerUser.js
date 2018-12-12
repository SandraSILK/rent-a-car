let validation = require('./validation');

document.getElementById('js-form-register').addEventListener('submit', function(event) {
    event.preventDefault();

    const first_name = document.getElementById('js-first-name').value;
    const last_name = document.getElementById('js-last-name').value;
    const tel = document.getElementById('js-tel').value;
    const email = document.getElementById('js-email').value;
    const password = document.getElementById('js-password').value;
    const confirm = document.getElementById('js-password-confirm').value;

    let Validation = validation.Validation;
    let form = new Validation();

    if (form.checkName(first_name)) {
        let template = form.template('Oh nie! Imię jest inwalidą');
        let input = document.getElementById('js-first-name');
        let element = document.createElement('div');
        console.log(element.innerHTML = template);
        input.appendChild(template);
    }
    // form.checkName(last_name);
    // form.checkTel(tel);
    // form.checkEmail(email);
    // form.checkConfirm(password, confirm);

})
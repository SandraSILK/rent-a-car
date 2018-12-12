class Validation {
    checkName(text) {
        const reg = /\d+/g;
        let found = text.match(reg);

        if (found != null) {
            return true;
        }
        return false;
    }

    checkEmail(email) {
        console.log('bla bla bla email ' + email);
    }

    checkTel(tel) {
        console.log('bla bla bla telefon ' + tel);
    }

    checkConfirm(password, confirm) {
        console.log('bla bla bla haslo ' + password);
        console.log('bla bla bla haslo2 ' + confirm);
    }

    template(message) {
        return `<div class="error"><strong>${message}</strong></div>`;
    }
}

module.exports = {
    Validation: Validation
}
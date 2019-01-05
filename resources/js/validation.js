class Validation {
    checkText(text) {
        if (text.match(/\d+/g) != null) {
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

    template(input, message) {
        input.nextSibling.remove();
        const element = document.createElement('div');
        element.innerHTML = `<strong>${message}</strong>`;
        element.classList.add('error');
        input.parentNode.insertBefore(element, input.nextSibling);
    }
}

module.exports = {
    Validation: Validation
}
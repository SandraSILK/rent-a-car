class Validation {
    checkText(text) {
        return text.match(/\d+/g) != null;
    }

    checkEmail(email) {
        return email.match(/\w+@\w+\.\w+/g) == null;
    }

    checkTel(tel) {
        return tel.match(/\d+/g) == null;
    }

    template(input, message) {
        this.removeTemplate(input);
        const element = document.createElement('div');
        element.innerHTML = `<strong>${message}</strong>`;
        element.classList.add('js-error');
        input.parentNode.insertBefore(element, input.nextSibling);
    }

    removeTemplate(input) {
        if (input.nextSibling != null) {
            input.nextSibling.remove();
        }
    }
}

module.exports = {
    Validation: Validation
}
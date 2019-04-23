const captcha = function() {
    const submitButton = document.getElementById('submit-button');
    submitButton.disabled = true;
};

const submitUserForm = function() {
    var response = grecaptcha.getResponse();
    if(response.length === 0) {
        alert('Please complete RECaptcha!');
        return false;
    }
    return true;
};

const verifyCaptcha = function() {
    const submitButton = document.getElementById('submit-button');
    submitButton.disabled = false;
};

window.verifyCaptcha = verifyCaptcha;

document.addEventListener('DOMContentLoaded', captcha);
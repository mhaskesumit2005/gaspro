(function () {
    // 'use strict';
    const forms = document.querySelectorAll('.needs-validation');

    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);
    });
})();


// 10 digit number validation
const usernameInput = document.getElementById('username');
usernameInput.addEventListener('input', function () {
    const value = usernameInput.value;

    // Only allow numeric input
    if (!/^\d*$/.test(value)) {
        usernameInput.value = value.replace(/\D/g, ''); // Remove non-digit characters
    }

    // Limit input to 10 characters
    if (value.length > 10) {
        usernameInput.value = value.slice(0, 10);
    }
});
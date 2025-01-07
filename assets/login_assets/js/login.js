
    (function () {
        'use strict';

        // Fetch all forms we want to apply custom validation to
        const forms = document.querySelectorAll('form');

        // Loop over them and prevent submission
        Array.from(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();


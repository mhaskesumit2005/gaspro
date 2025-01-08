// Run after DOM is fully loaded
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("changePasswordForm");

    form.addEventListener("submit", function (event) {
        const newPassword = document.getElementById("new_password");
        const confirmPassword = document.getElementById("confirm_password");

        // Check if form is valid
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        // Custom validation: Check if passwords match
        if (newPassword.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity("Passwords do not match.");
        } else {
            confirmPassword.setCustomValidity("");
        }

        // Add Bootstrap validation classes
        form.classList.add("was-validated");
    });

    // Reset form behavior
    form.addEventListener("reset", function () {
        form.classList.remove("was-validated");
    });
});



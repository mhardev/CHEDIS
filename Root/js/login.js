function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var toggleSpan = document.querySelector(".toggle-password");
    var passwordIcon = document.getElementById("password-icon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordIcon.textContent = "visibility_off";
    } else {
        passwordInput.type = "password";
        passwordIcon.textContent = "visibility";
    }
}
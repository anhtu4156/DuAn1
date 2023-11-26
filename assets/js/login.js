function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    var confirmPasswordError = document.getElementById('confirmPasswordError').value;
    var usernameError = document.getElementById("usernameError");
    var passwordError = document.getElementById("passwordError");

    // Reset previous error messages
    usernameError.innerHTML = "";
    passwordError.innerHTML = "";
    confirmPasswordError.innerHTML= "";

    var hasError = false;

    if (username === "") {
        usernameError.innerHTML = "Username không được để trống";
        hasError = true;
    }

    if (password === "") {
        passwordError.innerHTML = "Password không được để trống";
        hasError = true;
    }
    // // Validate confirm password
    // if (confirmPassword === '') {
    //     confirmPasswordError.innerHTML = 'Vui lòng nhập lại mật khẩu';
    //     hasError = true;
    // }

    // if (password !== confirmPassword) {
    //     confirmPasswordError.innerHTML = 'Mật khẩu không khớp';
    //     hasError = true;
    // }

    // Add additional validation as needed

    return !hasError;
}

function clearError(errorId) {
    document.getElementById(errorId).innerHTML = "";
}
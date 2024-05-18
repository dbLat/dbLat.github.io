function togglePasswordVisibility() {
 var passwordInput = document.getElementById("myPass");
 var togglePasswordButton = document.querySelector(".eye-image");

 if (passwordInput.type === "password") {
     passwordInput.type = "text";
     togglePasswordButton.src = "icons/eye-open.svg";
 } else {
     passwordInput.type = "password";
     togglePasswordButton.src = "icons/eye-close.svg";
 }
 setTimeout(function() {
     passwordInput.type = "password";
     togglePasswordButton.src = "icons/eye-close.svg";
 }, 2000);
}

function signin_process() {
    var username = document.getElementById("myUser");
    var pass = document.getElementById("myPass");

    if (username=="" && pass=="") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please enter a username and password!'
          });
    }
}

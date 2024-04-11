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


function login() {
 var usernameInput = document.getElementById("myUser").value.trim();
 var passwordInput = document.getElementById("myPass").value.trim();

 if (usernameInput !== "" && passwordInput !== "") {
     window.open("signup.html", "_self");
 } else {
     alert("Please enter both username and password.");
 }
}
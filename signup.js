function validate_required(field, alerttxt) {
 with (field) {
     if (value == null || value == "") {
         alert(alerttxt);
         return false;
     } else {
         return true;
     }
 }
}

function validate_form(thisform) {
 with (thisform) {
     if (validate_required(myFirst, "Please enter your first name.") == false) {
         myFirst.focus();
         return false;
     }
     if (validate_required(myLast, "Please enter your last name.") == false) {
         myLast.focus();
         return false;
     }
     if (validate_required(phone, "Invalid phone number!") == false) {
         phone.focus();
         return false;
     }
     if (validate_required(myPass, "Password can't be empty!") == false) {
         myPass.focus();
         return false;
     }
     if (validate_required(confirm, "Password can't be empty!") == false) {
         confirm.focus();
         return false;
     }

     if (!checkPassword(myPass.value, confirm.value)) {
         return false;
     }
 }
}

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

function toggleConfirmPasswordVisibility() {
 var passwordInput = document.getElementById("confirm");
 var togglePasswordButton = document.querySelector(".eye-image-confirm");

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


function checkPassword(myPass, confirm) {
 if (myPass != confirm) {
     window.alert("Passwords don’t match.");
     return false;
 }
 if (myPass.length < 8) {
     window.alert("Passwords must be 8 or more characters");
     return false;
 }

 window.alert("Thank you for signing up. Welcome to CHES!");
 window.location.href = "signin.html";
 return false;
}
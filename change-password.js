//current pass
let currentPass = document.querySelector('#currentPassID');
let eyeIcon = document.querySelector('#eyeIcon');

eyeIcon.onclick = () => {
 if(currentPass.type == "password") {
  currentPass.type = "text";
  eyeIcon.src = "icons/eye-open.svg";
 }
 else {
  currentPass.type = "password";
  eyeIcon.src = "icons/eye-close.svg";
 }
}

//new pass
let newPass = document.querySelector('#newPassID');
let eyeIcon2 = document.querySelector('#eyeIcon2');

eyeIcon2.onclick = () => {
 if(newPass.type == "password") {
  newPass.type = "text";
  eyeIcon2.src = "icons/eye-open.svg";
 }
 else {
  newPass.type = "password";
  eyeIcon2.src = "icons/eye-close.svg";
 }
}

//confirm pass
let confirmPass = document.querySelector('#confirmPassID');
let eyeIcon3 = document.querySelector('#eyeIcon3');

eyeIcon3.onclick = () => {
 if(confirmPass.type == "password") {
  confirmPass.type = "text";
  eyeIcon3.src = "icons/eye-open.svg";
 }
 else {
  confirmPass.type = "password";
  eyeIcon3.src = "icons/eye-close.svg";
 }
}
//

//check if new pass and confirm pass match
let savedChanges = document.querySelector('#saveID');
let savedChangesBox = document.querySelector('.saved-changes');
let okButton = document.querySelector('#okBtnID');

savedChanges.onclick = () => {
  if (newPass.value !== confirmPass.value) {
   alert("New password and confirm password don't match!");
  }
  else if (newPass.value == "" || confirmPass.value == "") {
    alert("Enter a new password first.");
  }
  else if (newPass.value.length < 8 || confirmPass.value.length < 8) {
   alert("Password should be at least 8 characters long.");
  }
  else {
   savedChangesBox.classList.add('open');
   okButton.onclick = () => {
    savedChangesBox.classList.remove('open');
   }
  }
}
//

//back button 
let backButton = document.querySelector('#backButtonID');

backButton.onclick = () => {
 window.location.href = "my-profile.html";
}
//

//cancel button
let cancelButton = document.querySelector('#cancelID');

cancelButton.onclick = () => {
 window.location.href = "edit-profile.html";
}
//
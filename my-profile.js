//confirmation box show
let deleteAccount = document.querySelector('#deleteAccountID');
let confirmBox = document.querySelector('.warning');
let check = document.querySelector('.check');
let noButton = document.querySelector('#noBtnID');
let yesButton = document.querySelector('#yesBtnID');
let okButton = document.querySelector('#okBtnID');

deleteAccount.onclick = () => {
  confirmBox.classList.add('open');
}
//if no
noButton.onclick = () => {
  confirmBox.classList.remove('open');
}
//if yes open check container
yesButton.onclick = () => {
  confirmBox.classList.remove('open');
  check.classList.add('open');
}
//if ok
okButton.onclick = () => {
  check.classList.remove('open');
}

//

//go to edit profile
let editProfileButton = document.querySelector('#editProfileID');

editProfileButton.onclick = () => {
 window.location.href = "edit-profile.html";
}
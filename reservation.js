//date
document.addEventListener("DOMContentLoaded", function() {
 var today = new Date();
 var dd = String(today.getDate()).padStart(2, '0');
 var mm = String(today.getMonth() + 1).padStart(2, '0'); 
 var yyyy = today.getFullYear();

 var todayString = yyyy + '-' + mm + '-' + dd;

 document.getElementById('purchaseDateID').value = todayString;
});
//

//confirmation box show
let confirmButton = document.querySelector('#confirmID');
let confirmBox = document.querySelector('.confirm-box-container');
let noButton = document.querySelector('#noBtnID');
let yesButton = document.querySelector('#yesBtnID');

confirmButton.onclick = () => {
  confirmBox.classList.add('open');
}
//if no
noButton.onclick = () => {
  confirmBox.classList.remove('open');
}
//if yes
yesButton.onclick = () => {
  window.location.href = "reservation-receipt.html";
}
//


/*
document.addEventListener("DOMContentLoaded", function() {
  const cancel = document.getElementById('cancelID');

  cancel.addEventListener('click', function() {
    window.location.href = ".html";
  });
});
*/

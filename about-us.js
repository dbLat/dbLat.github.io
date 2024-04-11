//header
document.addEventListener('DOMContentLoaded', function() {
 let hamburger = document.querySelector('#menu-icon');
 let menu = document.querySelector('.menu');
 let account = document.querySelector('#account-btn');
 let accountContainer = document.querySelector('.account-container');

 hamburger.onclick = () => {
  if (!accountContainer.classList.contains('open')) {
   menu.classList.toggle('open');
  }
  else {
   accountContainer.classList.remove('open');
   menu.classList.toggle('open');
  }
 }

 account.onclick = () => {
  if (!menu.classList.contains('open')) {
   accountContainer.classList.toggle('open');
  }
  else {
   menu.classList.remove('open');
   accountContainer.classList.toggle('open');
  }
 }
});
//
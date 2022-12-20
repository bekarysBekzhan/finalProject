let userBox = document.querySelector('.header .header-2 .user-box');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}


let navbar = document.querySelector('.header .header-2 .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 70){
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}
const buttons = document.getElementsByName("add_to_cart");

setInterval(function() {
  buttons.forEach(function(button) {
    if (button.style.backgroundColor === "blue") {
      button.style.backgroundColor = "red";
    } else {
      button.style.backgroundColor = "blue";
    }
  });
}, 1000); 



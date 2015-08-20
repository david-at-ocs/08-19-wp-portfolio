// menu functionality on mobile//

function menuCreate(){
  var list = document.getElementsByClassName("header__navigation")[0];
  list.classList.toggle("show");
  
}
var menu_button_click = document.getElementsByClassName("hamburger")[0];


menu_button_click.onclick = menuCreate;

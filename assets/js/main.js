
console.log('hello');

let popup_menu= document.querySelector('#popup_menu');
let menu_icon= document.querySelector('.menu-icon');

menu_icon.addEventListener('click', function() {
	menu_icon.classList.toggle('hide');
    popup_menu.classList.toggle('visible');
});
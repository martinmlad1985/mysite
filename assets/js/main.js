
console.log('hello');

let menu= document.querySelector('.menu');
let menu_icon= document.querySelector('.menu-icon');

menu_icon.addEventListener('click', function() {
	menu_icon.classList.toggle('hide');
    menu.classList.toggle('visible');
});
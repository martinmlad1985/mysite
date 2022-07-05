
console.log('hello');


// popup-menu for mobile device
let menu= document.querySelector('.menu');
let menu_icon= document.querySelector('.menu-icon');

menu_icon.addEventListener('click', function() {
	menu_icon.classList.toggle('hide');
    menu.classList.toggle('vis');
});




// height auto-correct
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

window.addEventListener('resize', () => {
    // получаем текущее значение высоты
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  });



  let header= document.querySelector('header');
  let hh = getComputedStyle(header).height;
  document.documentElement.style.setProperty('--hh', `${hh}`);
  

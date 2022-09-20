let burger_menu_space = document.querySelector('.space');
let burger_menu = document.querySelector('.burger__menu');
let menu = document.querySelector('.menu');

burger_menu.addEventListener('click', () =>{
    if(menu.classList.contains('active')){
        burger_menu_space.innerHTML = '<i class="fa-solid fa-bars"></i>';
        menu.classList.remove('active');
    }else{
        menu.classList.add('active');
        burger_menu_space.innerHTML = '<i class="fa-solid fa-xmark"></i>';
    }
})

//!TODO закрытие по клику вне области меню
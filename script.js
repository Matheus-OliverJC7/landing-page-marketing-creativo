const menu = document.querySelector('.menu-mobile');
const line1 = document.querySelector('.line1');
const line2 = document.querySelector('.line2');
const line3 = document.querySelector('.line3');
const header = document.getElementsByTagName('header')[0];
const menuIcon = document.querySelector('.menu-mobile-icon').addEventListener('click', function(){
    if(menu.style.display == 'block'){
        header.style.borderBottom = 'none';
        menu.style.display = 'none';
        menu.classList.remove('menu-active');
        line1.classList.remove('line1active');
        line2.classList.remove('line2active');
        line3.classList.remove('line3active');
    }else{
        header.style.borderBottom = '2px solid rgba(255, 255, 255, 0.5)';
        menu.style.display = 'block';
        menu.classList.add('menu-active');
        line1.classList.add('line1active');
        line2.classList.add('line2active');
        line3.classList.add('line3active');
    }
})
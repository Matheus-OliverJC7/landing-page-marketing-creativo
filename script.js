const menu = document.querySelector('.mobile-menu');
const openMenu = document.querySelector('.mobile-menu-icon');
const closeMenu = document.querySelector('.close-mobile-menu');
function changeMenu(){
    document.body.classList.toggle('blockScrollY');
    menu.classList.toggle('changeMenu');
    document.addEventListener('click', function(event){
        let isClickMenu = menu.contains(event.target);
        let isClickIcon = openMenu.contains(event.target);
        if(!isClickIcon && !isClickMenu){
            document.body.classList.remove('blockScrollY');
            menu.classList.remove('changeMenu');
        }
    });
}
openMenu.addEventListener('click', changeMenu);
closeMenu.addEventListener('click', changeMenu);
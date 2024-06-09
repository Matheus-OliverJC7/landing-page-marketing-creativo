const menu = document.querySelector('.mobile-menu');
document.querySelector('.mobile-menu-icon').addEventListener('click', ()=>{
    document.body.classList.toggle('blockScrollY');
    menu.classList.toggle('openMenu');
});
document.addEventListener('click', (event)=>{
    let isClickMenu = menu.contains(event.target);
    let isClickOpen = document.querySelector('.mobile-menu-icon').contains(event.target);
    let isClickClose = document.querySelector('.close-mobile-menu').contains(event.target);
    if(!isClickOpen && !isClickMenu || isClickClose){
        document.body.classList.remove('blockScrollY');
        menu.classList.remove('openMenu');
    }
});
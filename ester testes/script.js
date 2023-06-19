const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.nav-menu');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})

var menuItem = document.querySelectorAll(".item-menu"
)
function selectlink(){
    menuItem.forEach((item)=>
    item.classList.remove("ativo")
    )
    this.classList.add('ativo')
}

menuItem.forEach((item)=>
item.addEventListener('click', selectlink)
)

//EXPANDIR MENU

var btnExp = document.querySelector('#btn-exp')
var menuSide = document.querySelector('.menu-lateral')

btnExp.addEventListener('click', function(){
    menuSide.classList.toggle('expandir')
})

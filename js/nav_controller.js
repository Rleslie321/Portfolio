// Robert Leslie
// controls the opening of the nav bar on smaller devices

const opener = document.querySelector('#nav-opener');
const menu = document.querySelector('.menu');

const buttons = document.querySelectorAll('.dropbtn');

opener.addEventListener("click", ()=>{
    menu.classList.toggle('menu-shower');
});

buttons.forEach((button)=>{
    button.addEventListener('click', ()=>{
        button.nextElementSibling.classList.toggle('drop-show');
    });
});

document.addEventListener('click', (e)=>{
    var btnPress = false;
    buttons.forEach((button)=>{
        if(button.contains(e.target)){
            btnPress = true;
        }else{
            button.nextElementSibling.classList.remove('drop-show');
        }
    });
    if(!btnPress){
        buttons.forEach((button)=>{
            button.nextElementSibling.classList.remove('drop-show');
        });
    }
});


let body = document.getElementById('body');
// let nav = document.querySelector('nav');
let header = document.getElementById('header');
let box = document.getElementById('box');
let toggle = document.getElementById('toggle');

let confirm = false;


body.classList.add('lightTheme');
header.classList.add('header');
toggle.classList.add('toggleLight');

box.addEventListener('click' , ()=>{

    if(confirm == false){

        toggle.style.transform = "translate(-30px)";

        // header.classList.remove('header');
        // header.classList.add('headerDark');

        toggle.classList.add('toggleDark');
        toggle.classList.remove('toggleLight');


        body.classList.remove('lightTheme');
        body.classList.add('darkTheme');

        // nav.classList.add('darkThemeNav');

        confirm = true;

    } else {

        toggle.style.transform = "translate(0px)";

        // header.classList.remove('headerDark');
        // header.classList.add('header');

        toggle.classList.remove('toggleDark');
        toggle.classList.add('toggleLight');

        body.classList.remove('darkTheme');
        body.classList.add('lightTheme');
        // nav.classList.remove('darkThemeNav');
        // nav.classList.add('darkTheme');

        confirm = false;

    }

});


let body = document.getElementById('body');
let box = document.getElementById('box');
let toggle = document.getElementById('toggle');

let confirm = false;


body.classList.add('lightTheme');
toggle.classList.add('toggleLight');

box.addEventListener('click' , ()=>{

    if(confirm == false){

        toggle.style.transform = "translate(-30px)";

        toggle.classList.add('toggleDark');
        toggle.classList.remove('toggleLight');

        body.classList.remove('lightTheme');
        body.classList.add('darkTheme');

        confirm = true;

    } else {

        toggle.style.transform = "translate(0px)";

        toggle.classList.remove('toggleDark');
        toggle.classList.add('toggleLight');

        body.classList.remove('darkTheme');
        body.classList.add('lightTheme');

        confirm = false;

    }

});
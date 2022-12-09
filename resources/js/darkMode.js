let body = document.getElementById('body');
let box = document.getElementById('box');
let toggle = document.getElementById('toggle');
let starsWrapper = document.getElementById('starsWrapper');

let confirm = false;

body.classList.add('lightTheme');
toggle.classList.add('toggleLight');
starsWrapper.innerHTML = '';

box.addEventListener('click' , ()=>{

    if(confirm == false){

        toggle.style.transform = "translate(-30px)";

        toggle.classList.add('toggleDark');
        toggle.classList.remove('toggleLight');

        body.classList.remove('lightTheme');
        body.classList.add('darkTheme');

        starsWrapper.innerHTML = `
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
            <div id="stars4"></div>
        `

        confirm = true;

    } else {

        toggle.style.transform = "translate(0px)";

        toggle.classList.remove('toggleDark');
        toggle.classList.add('toggleLight');

        body.classList.remove('darkTheme');
        body.classList.add('lightTheme');

        starsWrapper.innerHTML = '';

        confirm = false;

    }

});
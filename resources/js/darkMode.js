let darkMode = document.getElementById('darkMode');
let body = document.getElementById('body');
let bulb = document.getElementById('bulb');


let confirm = false;
bulb.classList.add('text-warning');


darkMode.addEventListener('click' , ()=>{

    if(confirm == false){

        body.classList.add('backgroundDark');

        bulb.classList.remove('text-warning');

        confirm = true;

    } else {

        body.classList.remove('backgroundDark');

        bulb.classList.add('text-warning');


        confirm = false;

    }

});

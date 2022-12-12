import './bootstrap';
import 'bootstrap/dist/js/bootstrap.min.js';
import './darkMode';
import './christmasMode';

let confirm =  false;

let arrow = document.getElementById('arrow');

arrow.addEventListener('click' , ()=>{

    if(confirm == false){

        arrow.style.transition = '0.6s'
        arrow.style.transform = 'rotate(180deg)';

        confirm = true;

    } else {

        arrow.style.transform = 'rotate(0deg)';

        confirm = false;
    }

});

let showPwd1 = document.getElementById('showPwd1');
let password1 = document.getElementById('password1');

showPwd1.addEventListener('click' , ()=>{

    if(password1.type == 'password'){
        password1.type = 'text';
    } else {
        password1.type = 'password';
    }

});

let showPwd2 = document.getElementById('showPwd2');
let password2 = document.getElementById('password2');

showPwd2.addEventListener('click' , ()=>{

    if(password2.type == 'password'){
        password2.type = 'text';
    } else {
        password2.type = 'password';
    }

});





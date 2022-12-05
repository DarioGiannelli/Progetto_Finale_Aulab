import './bootstrap';
import 'bootstrap/dist/js/bootstrap.min.js';
import './darkMode';

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


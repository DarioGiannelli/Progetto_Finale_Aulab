let darkMode = document.getElementById('darkMode');
let body = document.getElementById('body');
let navbar = document.getElementById('navbar');
let titoloNav = document.getElementById('titoloNav');
let bulb = document.getElementById('bulb');


let confirm = false;
bulb.classList.add('text-warning');


darkMode.addEventListener('click' , ()=>{

    if(confirm == false){

        titoloNav.classList.remove('text-primary');

        titoloNav.classList.add('darkModeNav');

        navbar.classList.remove('bg-light');

        navbar.classList.add('darkModeNav');

        bulb.classList.remove('text-warning');

        bulb.classList.add('text-black');

        confirm = true;

    } else {

        titoloNav.classList.add('text-primary');

        titoloNav.classList.remove('darkModeNav');

        navbar.classList.add('bg-light');

        navbar.classList.remove('darkModeNav');

        bulb.classList.remove('text-black');

        bulb.classList.add('text-warning');

        confirm = false;

    }

});

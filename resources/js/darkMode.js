let body = document.getElementById('body');
let box = document.getElementById('box');
let toggle = document.getElementById('toggle');
// let starsWrapper = document.getElementById('starsWrapper');



if (localStorage.getItem('darkMode') == null) {
    localStorage.setItem('darkMode', 'light');
} else {
    if (localStorage.getItem('darkMode') == 'light'){
        
        toggle.style.transform = "translate(0px)";

        toggle.classList.remove('toggleDark');
        toggle.classList.add('toggleLight');

        body.classList.remove('darkTheme');
        // body.classList.add('lightTheme');

        starsWrapper.innerHTML = '';
    } else { //dark
        toggle.style.transform = "translate(-30px)";

        toggle.classList.add('toggleDark');
        toggle.classList.remove('toggleLight');

        // body.classList.remove('lightTheme');
        body.classList.add('darkTheme');

        let starsWrapper = document.querySelector ('#starsWrapper');

        
            let div = document.createElement('div');
            div.classList.add('stars');
            div.innerHTML = `
            <div class="stars"></div>
            `

            starsWrapper.appendChild(div);
       

        // starsWrapper.innerHTML = `
        //     <div id="stars"></div>
        //     <div id="stars2"></div>
        //     <div id="stars3"></div>
        //     <div id="stars4"></div>
        // `
    }
}

// console.log(loadPage);

// let confirm = false;

// body.classList.add('lightTheme');
// toggle.classList.add('toggleLight');
// starsWrapper.innerHTML = '';

box.addEventListener('click' , ()=>{

    if(localStorage.getItem('darkMode') == 'light'){

        localStorage.setItem('darkMode', 'dark');

        toggle.style.transform = "translate(-30px)";

        toggle.classList.add('toggleDark');
        toggle.classList.remove('toggleLight');


        body.classList.add('darkTheme');
        // body.classList.remove('lightTheme');
        
        let starsWrapper = document.querySelector ('#starsWrapper');

       
        let div = document.createElement('div');
        div.classList.add('stars');
        div.innerHTML = `
        <div class="stars"></div>
        `

        starsWrapper.appendChild(div);
       



        // starsWrapper.innerHTML = `
        //     <div id="stars"></div>
        //     <div id="stars2"></div>
        //     <div id="stars3"></div>
        //     <div id="stars4"></div>
        // `


            // confirm = true;

        

    } else {
        localStorage.setItem('darkMode', 'light');

        toggle.style.transform = "translate(0px)";

        toggle.classList.remove('toggleDark');
        toggle.classList.add('toggleLight');

        body.classList.remove('darkTheme');
        // body.classList.add('lightTheme');


        starsWrapper.innerHTML = '';

        // confirm = false;

        


     }

 });
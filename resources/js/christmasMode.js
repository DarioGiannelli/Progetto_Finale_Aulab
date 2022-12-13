let body = document.getElementById('body');
let christmas = document.getElementById('christmas');
let titoloMasthead = document.getElementById('titoloMasthead');
let spanMasthead = document.getElementById('spanMasthead');


if (localStorage.getItem('darkMode') == 'light') {
    localStorage.setItem('xmasMode', 'normal');
} else {
    if (localStorage.getItem('xmasMode') == 'normal'){
        
        body.classList.remove('christmasTheme');

        titoloMasthead.classList.remove('testoRosso');
        spanMasthead.classList.add('span');
        spanMasthead.classList.remove('testoBianco');

        snowWrapper.innerHTML = '';


    } else { //xmas
    
        body.classList.add('christmasTheme');

        titoloMasthead.classList.add('testoRosso');
        spanMasthead.classList.remove('span');
        spanMasthead.classList.add('testoBianco');

        let snowWrapper = document.querySelector ('#snowWrapper');


        for (let i = 0; i < 200; i++) {
            let div = document.createElement('div');
            div.classList.add('snow');
            div.innerHTML = `
                <div class="snow"></div>
            `
            
        snowWrapper.appendChild(div);


        }


    }
}



christmas.addEventListener('click' , ()=>{

    if(localStorage.getItem('xmasMode') == 'normal'){

        localStorage.setItem('xmasMode', 'xmas');

        body.classList.add('christmasTheme');

        titoloMasthead.classList.add('testoRosso');
        spanMasthead.classList.remove('span');
        spanMasthead.classList.add('testoBianco');
        
        let snowWrapper = document.querySelector ('#snowWrapper');

        for (let i = 0; i < 200; i++) {
            let div = document.createElement('div');
        div.classList.add('snow');
        div.innerHTML = `
            <div class="snow"></div>
        ` 
        snowWrapper.appendChild(div);

        }


    } else {
        snowWrapper.innerHTML = '';
        
        localStorage.setItem('xmasMode', 'normal');

        body.classList.remove('christmasTheme');

        titoloMasthead.classList.remove('testoRosso');
        spanMasthead.classList.add('span');
        spanMasthead.classList.remove('testoBianco');



     }

 });

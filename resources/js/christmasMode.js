
// let snowWrapper = document.getElementById('snowWrapper');

// snowWrapper.innerHTML='';

// let confirm = false;

// body.classList.add('lightTheme');

// christmas.addEventListener('click' , ()=>{

//     if(confirm == false){

//         body.classList.remove('lightTheme');
//         body.classList.add('christmasTheme');

//         titoloMasthead.classList.add('testoRosso');

//         spanMasthead.classList.remove('span');
//         spanMasthead.classList.add('testoBianco');

//         snowWrapper.innerHTML=`
    //     <div class="snowflake">
    //     ❅
    //     </div>

    //     <div class="snowflake">
    //     ❅
    // </div>

    // <div class="snowflake">
    //     ❆
    // </div>

    // <div class="snowflake">
    //     ❄
    // </div>

    // <div class="snowflake">
    //     ❅
    // </div>

    // <div class="snowflake">
    //     ❆
    // </div>

    // <div class="snowflake">
    //     ❄
    // </div>

    // <div class="snowflake">
    //     ❅
    // </div>

    // <div class="snowflake">
    //     ❆
    // </div>

    // <div class="snowflake">
    //     ❄
    // </div>
//         `;

//         confirm = true;

//     } else {

//         body.classList.remove('christmasTheme');
//         body.classList.add('lightTheme');

//         titoloMasthead.classList.remove('testoRosso');

//         spanMasthead.classList.remove('testoBianco');
//         spanMasthead.classList.add('span');

//         snowWrapper.innerHTML='';

//         confirm = false;

//     }

// });

// let body = document.getElementById('body');
// let box = document.getElementById('box');
// let toggle = document.getElementById('toggle');
// let starsWrapper = document.getElementById('starsWrapper');

let body = document.getElementById('body');
let christmas = document.getElementById('christmas');
let titoloMasthead = document.getElementById('titoloMasthead');
let spanMasthead = document.getElementById('spanMasthead');


if (localStorage.getItem('xmasMode') == null) {
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

        for (let i = 0; i <= 100; i++) {
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

        for (let i = 0; i <= 100; i++) {
            let div = document.createElement('div');
        div.classList.add('snow');
        div.innerHTML = `
            <div class="snow"></div>
        `
            
        snowWrapper.appendChild(div);
        }

        

    
        

    } else {
        localStorage.setItem('xmasMode', 'normal');

        body.classList.remove('christmasTheme');

        titoloMasthead.classList.remove('testoRosso');
        spanMasthead.classList.add('span');
        spanMasthead.classList.remove('testoBianco');

        snowWrapper.innerHTML = '';


     }

 });

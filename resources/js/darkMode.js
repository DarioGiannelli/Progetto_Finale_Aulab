let body = document.getElementById('body');
let box = document.getElementById('box');
let toggle = document.getElementById('toggle');

let christmas = document.getElementById('christmas');
let titoloMasthead = document.getElementById('titoloMasthead');
let spanMasthead = document.getElementById('spanMasthead');


if (localStorage.getItem('theme') == null) {
    localStorage.setItem('theme', 'light');
} else {

    if (localStorage.getItem('theme') == 'light'){
        
        toggle.style.transform = "translate(0px)";

        toggle.classList.remove('toggleDark');
        toggle.classList.add('toggleLight');

        body.classList.remove('darkTheme');

        body.classList.remove('christmasTheme');

        (titoloMasthead) ? titoloMasthead.classList.remove('testoRosso') : console.log('');
         
        if (spanMasthead){
           spanMasthead.classList.add('span');
           spanMasthead.classList.add('testoBianco');
        }



        starsWrapper.innerHTML = '';
        snowWrapper.innerHTML = '';
        



    } else if (localStorage.getItem('theme') == 'darkStars') {

        

        toggle.style.transform = "translate(-12px)";

        toggle.classList.add('toggleDark');
        toggle.classList.remove('toggleLight');

   
        body.classList.add('darkTheme');

        let starsWrapper = document.querySelector ('#starsWrapper');

        
            let div = document.createElement('div');
            div.classList.add('stars');
            div.innerHTML = `
            <div class="stars"></div>
            `

            starsWrapper.appendChild(div);



    } else {
        

    
         body.classList.add('christmasTheme');

         (titoloMasthead) ? titoloMasthead.classList.add('testoRosso') : console.log('');
         
         if (spanMasthead){
            spanMasthead.classList.remove('span');
            spanMasthead.classList.add('testoBianco');
         }
       
 
         let snowWrapper = document.querySelector ('#snowWrapper');
 
 
         for (let i = 0; i < 200; i++) {
             let div = document.createElement('div');
             div.classList.add('snow');
            //  div.innerHTML = `
            //      <div class="snow"></div>
            //  `
             
         snowWrapper.appendChild(div);
 
 
         }
        
    }
};

// NOTTE

box.addEventListener('click' , ()=>{

    if(localStorage.getItem('theme') == 'light'){

        localStorage.setItem('theme', 'darkStars');

        toggle.style.transform = "translate(-12px)";

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
       

    } else if (localStorage.getItem('theme') == 'xmas'){
    
        localStorage.setItem('theme', 'darkStars');

        body.classList.remove('christmasTheme');

        (titoloMasthead) ? titoloMasthead.classList.add('testoRosso') : console.log('');
         
        if (spanMasthead){
           spanMasthead.classList.remove('span');
           spanMasthead.classList.add('testoBianco');
        }

        toggle.style.transform = "translate(-12px)";

        toggle.classList.add('toggleDark');
        toggle.classList.remove('toggleLight');

        snowWrapper.innerHTML = '';
        body.classList.add('darkTheme');
  
        
        let starsWrapper = document.querySelector ('#starsWrapper');

       
        let div = document.createElement('div');
        div.classList.add('stars');
        div.innerHTML = `
        <div class="stars"></div>
        `

        starsWrapper.appendChild(div);
       
    
    }else if (localStorage.getItem('theme') == 'darkStars'){
        localStorage.setItem('theme', 'light');

        toggle.style.transform = "translate(0px)";

        toggle.classList.remove('toggleDark');
        toggle.classList.add('toggleLight');

        body.classList.remove('darkTheme');
      
        starsWrapper.innerHTML = '';



     }

 });


//  NATALE

 christmas.addEventListener('click' , ()=>{

    if(localStorage.getItem('theme') == 'light'){

        localStorage.setItem('theme', 'xmas');

        body.classList.add('christmasTheme');

        (titoloMasthead) ? titoloMasthead.classList.add('testoRosso') : console.log('');
         
        if (spanMasthead){
           spanMasthead.classList.remove('span');
           spanMasthead.classList.add('testoBianco');
        }
        
        let snowWrapper = document.querySelector('#snowWrapper');

        for (let i = 0; i < 200; i++) {
            let div = document.createElement('div');
        div.classList.add('snow');
        // div.innerHTML = `
        //     <div class="snow"></div>
        // ` 
        snowWrapper.appendChild(div);


    }} else if (localStorage.getItem('theme') == 'darkStars'){
    
    localStorage.setItem('theme', 'xmas');

    toggle.style.transform = "translate(0px)";

        toggle.classList.remove('toggleDark');
        toggle.classList.add('toggleLight');

        body.classList.remove('darkTheme');
      
        starsWrapper.innerHTML = '';


    body.classList.add('christmasTheme');

    (titoloMasthead) ? titoloMasthead.classList.add('testoRosso') : console.log('');
         
    if (spanMasthead){
       spanMasthead.classList.remove('span');
       spanMasthead.classList.add('testoBianco');
    }
    
    let snowWrapper = document.querySelector ('#snowWrapper');

    for (let i = 0; i < 200; i++) {
        let div = document.createElement('div');
    div.classList.add('snow');
    // div.innerHTML = `
    //     <div class="snow"></div>
    // ` 
    snowWrapper.appendChild(div);


    }} else if (localStorage.getItem('theme') == 'xmas'){
        
        localStorage.setItem('theme', 'light');

        
        snowWrapper.innerHTML = '';
        
        

        body.classList.remove('christmasTheme');

        (titoloMasthead) ? titoloMasthead.classList.remove('testoRosso') : console.log('');
         
        if (spanMasthead){
           spanMasthead.classList.add('span');
           spanMasthead.classList.add('testoBianco');
        }

        }

     });

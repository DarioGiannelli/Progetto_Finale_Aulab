let body = document.getElementById('body');
let christmas = document.getElementById('christmas');
let titoloMasthead = document.getElementById('titoloMasthead');
let spanMasthead = document.getElementById('spanMasthead');
let snowWrapper = document.getElementById('snowWrapper');

snowWrapper.innerHTML='';

let confirm = false;

body.classList.add('lightTheme');

christmas.addEventListener('click' , ()=>{

    if(confirm == false){

        body.classList.remove('lightTheme');
        body.classList.add('christmasTheme');

        titoloMasthead.classList.add('testoRosso');

        spanMasthead.classList.remove('span');
        spanMasthead.classList.add('testoBianco');

        snowWrapper.innerHTML=`
        <div class="snowflake">
        ❅
    </div>

    <div class="snowflake">
        ❅
    </div>

    <div class="snowflake">
        ❆
    </div>

    <div class="snowflake">
        ❄
    </div>

    <div class="snowflake">
        ❅
    </div>

    <div class="snowflake">
        ❆
    </div>

    <div class="snowflake">
        ❄
    </div>

    <div class="snowflake">
        ❅
    </div>

    <div class="snowflake">
        ❆
    </div>

    <div class="snowflake">
        ❄
    </div>
        `;

        confirm = true;

    } else {

        body.classList.remove('christmasTheme');
        body.classList.add('lightTheme');

        titoloMasthead.classList.remove('testoRosso');

        spanMasthead.classList.remove('testoBianco');
        spanMasthead.classList.add('span');

        snowWrapper.innerHTML='';

        confirm = false;

    }

});


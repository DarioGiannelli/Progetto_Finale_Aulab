<x-layout>

<!-- <svg class="blob" id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><g transform="translate(424.1970790198573 292.17104505435265)"><path d="M53.8 -65.8C75.8 -58 104 -50.5 119.8 -31.8C135.7 -13.2 139.2 16.6 128.3 39.1C117.4 61.6 92.2 76.9 68.4 84.7C44.7 92.5 22.3 92.7 -2 95.4C-26.3 98.1 -52.5 103.3 -66.9 92.5C-81.4 81.6 -84 54.9 -82.7 33C-81.5 11 -76.4 -6.1 -70.9 -23C-65.4 -40 -59.4 -56.8 -47.5 -67.9C-35.7 -79.1 -17.8 -84.5 -1 -83.2C15.9 -81.8 31.7 -73.7 53.8 -65.8" fill="#36515c"></path></g></svg> -->

<div class="login-form">

    <div class="container">
        <div class="row">

            <div class="col-3 text-center">

                <i class="fa-solid fa-address-card fa-2x mx-1"></i>

            </div>

            <div class="col-6 text-center">

                <h1>Login </h1>


            </div>
        </div>
    </div>

    <form action="{{ route('login') }}" method="POST"> 
        @csrf
       <div class="container my-2">
        <div class="row">
            <div class="col-12">
                <i class="fa-solid fa-at"></i>
            </div>

            <div class="col-12">
                <input type="text" placeholder="your email" name='email' />
            </div>

            <div class="col-12">
                <i class="fa-solid fa-unlock"></i>
            </div>

            <div class="col-12">
                <input type="password" placeholder="" name='password'/>
            </div>
        </div>
        
       </div>

        <button type="submit">Vai</button>
        <div class="forgot-signup">
            <a href="#" class="signup">Forgot password?</a>
            <a href="#" class="signup">Registrati</a>
        </div>
    </form>
</div>

</x-layout>
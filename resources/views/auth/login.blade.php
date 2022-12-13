<x-layout>
    <div class="container login-form my-5">
        <div class="row">
            <div class="col-8">
                <h1>Login</h1>
            </div>
            <div class="col-4 d-flex flex-column justify-content-center text-center">
                <i class="fa-regular fa-id-card fa-2x mx-1 text-white"></i>
            </div>
            <div class="col-12">
                <form action="{{ route('login') }}" method="POST"> 
                    @csrf
                   <div class="container my-2">
                        <div class="row">
                            <div class="col-2 d-flex flex-column justify-content-center">
                                <i class="fa-solid fa-at"></i>
                            </div>
                            <div class="col-10">
                                <input class="rounded-pill" type="text" placeholder="your email" name='email' />
                            </div>
                            <div class="col-2 d-flex flex-column justify-content-center">
                                <i class="fa-solid fa-unlock"></i>
                            </div>
                            <div class="col-10">
                                <input class="rounded-pill" type="password" placeholder="your password" name='password'/>
                            </div>
                        </div>
                   </div>
            
                    <button class="btnLogin text-white rounded-pill" type="submit">Login</button>
                    <div class="forgot-signup">
                        <a href="#" class="signup">Forgot password?</a>
                        <a href="{{ Route('register') }}" class="signup">Registrati</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
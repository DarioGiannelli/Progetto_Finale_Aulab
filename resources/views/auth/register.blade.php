

<x-layout>
    <div class="container login-form my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Registrati</h1>
            </div>

            <div class="col-12">
                <form method="POST" action="{{route('register')}}"> 
                    @csrf
                        <div class="container my-2">
                                <div class="row">
                                    <div class="col-2 d-flex flex-column justify-content-center">
                                        <i class="fa-solid fa-address-card"></i>
                                    </div>
                                    <div class="col-10">
                                        <input class="rounded-pill" type="text" placeholder="username" name='name' />
                                    </div>
                                    <div class="col-2 d-flex flex-column justify-content-center">
                                        <i class="fa-solid fa-at"></i>
                                    </div>
                                    <div class="col-10">
                                        <input class="rounded-pill" type="text" placeholder="email" name='email' />
                                    </div>
                                    <div class="col-2 d-flex flex-column justify-content-center">
                                        <i class="fa-solid fa-unlock"></i>
                                    </div>
                                    <div class="col-10">
                                        <input id="password1" class="rounded-pill" type="password" placeholder="password" name='password'/>
                                        <i id="showPwd1" class="fa-regular fa-eye"></i>
                                    </div>
                                    <div class="col-2 d-flex flex-column justify-content-center">
                                        <i class="fa-solid fa-unlock"></i>
                                    </div>
                                    <div class="col-10">
                                        <input class="rounded-pill" type="password" placeholder="check password" name='password_confirmation'/>
                                    </div>
                                </div>
                        </div>
            
                    <button class="btnLogin text-white rounded-pill" type="submit">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
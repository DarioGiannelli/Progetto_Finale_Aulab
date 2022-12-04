
<!-- FORM DI PROVA -->
{{-- <x-layout>
    <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control"  aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout> --}}

<x-layout>
    <div class="container login-form my-5">
        <div class="row">
            <div class="col-8">
                <h1 class="d-flex">Registrati</h1>
            </div>

            <div class="col-4 d-flex flex-column justify-content-center text-center">
                <i class="fa-solid fa-user-plus fa-2x"></i>
                {{-- <i class="fa-solid fa-address-card"></i> --}}
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
                                        <input type="text" placeholder="username" name='name' />
                                    </div>
                                    <div class="col-2 d-flex flex-column justify-content-center">
                                        <i class="fa-solid fa-at"></i>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" placeholder="email" name='email' />
                                    </div>
                                    <div class="col-2 d-flex flex-column justify-content-center">
                                        <i class="fa-solid fa-unlock"></i>
                                    </div>
                                    <div class="col-10">
                                        <input type="password" placeholder="password" name='password'/>
                                    </div>
                                    <div class="col-2 d-flex flex-column justify-content-center">
                                        <i class="fa-solid fa-unlock"></i>
                                    </div>
                                    <div class="col-10">
                                        <input type="password" placeholder="check password" name='password_confirmation'/>
                                    </div>
                                </div>
                        </div>
            
                    <button type="submit">Vai</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
<x-layout>

    <section class="pt-5 pb-5 vh-200" style="background-color: #e52f2f;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4" method="post" action="{{ route('register') }}">
                                        @csrf
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw text-danger"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="formName">Your Name</label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror" />
                                                     @error('name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                     @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw text-warning"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="formEmail">Your Email</label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror" />
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw text-info"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" name="password"
                                                    class="form-control @error('password') is-invalid @enderror" />
                                                    @error('password')
                                                         <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw text-primary"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password">Repeat your password</label>
                                                <input type="password" name="password_confirmation"  id="form3Example4cd"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror" />
                                                    @error('password_confirmation')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                     @enderror
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                               Sono d'accordo con tutte le affermazioni contenute <a href="#!">Terms of service</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Registrati</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="{{ url('/img/register.jpg') }}" class="img-fluid" style="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layout>

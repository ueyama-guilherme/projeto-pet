@extends('layout')

@section('title', 'Entrar')

@section('content')
    <section class="vh-100 mb-5">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('assets/img/login.jpg') }}" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    @isset($message)
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @endisset
                                    <form action="{{ route('login.auth') }}" method="POST">
                                        @csrf
                                        <h5 class="fw-normal mb-3 pb-3 text-center">Entrar</h5>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" id="email" name="email"
                                                class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Senha</label>
                                            <input type="password" id="password" name="password"
                                                class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="remember">Lembrar-me</label>
                                            <input type="checkbox" name="remember">
                                        </div>

                                        <div class="pt-1 mb-4 text-center lg">
                                            <button class="btn btn-dark btn-lg" type="submit">Login</button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Não possui uma conta? <a
                                                href="{{ route('admin.create') }}" style="color: #393f81;">Cadastre-se
                                                aqui</a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

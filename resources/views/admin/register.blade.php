@extends('layout')
@section('title', 'Cadastrar')

@section('content')
<section class="vh-100 mb-5">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{asset('assets/img/login.jpg')}}"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="{{route('admin.store')}}" method="POST">
                        @csrf
                        <h5 class="fw-normal mb-2 pb-3 text-center">Crie sua conta</h5>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Abrigo</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg" value="{{old('name')}}" />
                            @if ($errors->has('name'))

                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>

                            @endif
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{old('email')}}" />
                            @if ($errors->has('email'))

                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>

                            @endif
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Senha</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" />
                            @if ($errors->has('password'))

                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>

                            @endif
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Confirmar senha</label>
                            <input type="password" id="password" name="password_confirmation" class="form-control form-control-lg" />
                        </div>

                        <div class="pt-1 mb-4 text-center lg">
                            <input type="submit" class="btn btn-dark btn-lg" value="Cadastrar">
                        </div>
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

@extends('layout')
@section('title', 'Abrigos')

@section('content')
    <section class="bg-dark py-3">
        <div class="container px-3 px-lg-4 my-4">
            <div class="text-center text-white">
                <h1 class="display-2">Conheça os abrigos cadastrados</h1>
            </div>
        </div>
    </section>
    <section class="py-2">


        <div class="container px-4 px-lg-5 mt-5" style="height: 100vh">


            <div class="container-fluid mb-5 py-2 px-2">
                <form action="{{ route('search') }}" class="d-flex" role="search">
                    @csrf
                    <input class="form-control" name="search" id="search" type="search"
                    placeholder="Nome, cep (XXXXX-XXX), estado (SIGLA), cidade, etc" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>


            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @if ($usersSearch->count() == 0)

                <div class="row text-center">
                    <p>Nenhum resultado encontrado</p>
                    <p>
                        <a href="{{route('list')}}">Voltar</a>
                    </p>
                </div>

                @else
                    @foreach ($usersSearch as $user)
                        <div class="col mb-5">
                            <div class="card border-dark">
                                <div>
                                    @if ($user->image)
                                        <img class="card-img-top mb-2 img-fluid img-responsive"
                                            src="{{ url("storage/{$user->image}") }}" alt="">
                                    @else
                                        <img class="card-img-top mb-2 img-fluid" src="{{ asset('assets/img/logo.png') }}"
                                            alt="">
                                    @endif
                                </div>

                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">{{ $user->name }}</h5>
                                        {{ Str::limit($user->description, 30) ?? 'Abrigo animal' }}
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                            href="{{ route('details', $user) }}">Ver mais</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>

            <div class="d-flex justify-content-center">
                {{ $usersSearch->links() }}
            </div>

        </div>

    </section>
@endsection

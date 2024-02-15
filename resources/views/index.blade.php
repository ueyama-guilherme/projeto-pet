@extends('layout')
@section('title', 'Home')

@section('content')
<div class="bg-dark py-3">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Eles precisam do seu amor e cuidado</h1>
                    <p class="lead fw-normal text-white-50 mb-4"></p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{route('list')}}">Conhecer abrigos</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="{{route('admin.create')}}">Faça parte</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{asset('assets/img/img.jpg')}}"  /></div>
        </div>
    </div>
</div>

<section class="py-5" id="sobre">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-3">Sobre</h2>
                <p>Este projeto tem como objetivo reunir abrigos animais espalhados por todo o pais em um unico local</p>
            </div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h5">+ DE 185 MIL</h2>
                        <p class="mb-0">Animais abandonados em todo o país</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h5">AUMENTO DE 61,6%</h2>
                        <p class="mb-0">No número de abandonos ao redor do país</p>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h5">DIVERSOS ABRIGOS</h2>
                        <p class="mb-0">Precisando de sua ajuda</p>
                    </div>
                    <div class="col h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h5">VENHA CONHECER</h2>
                        <p class="mb-0">Abrigos espalhados por todo território nacional</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('layout')

@section('title', 'Abrigo')

@section('content')
    <section style="background-color: #eee; height:100vh">
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-5">
                    <div class="card mb-4">
                        <div class="card-body text-center">

                            @if ($user->image)
                                <img class="img-account-profile mb-2 img-fluid" src="{{ url("storage/{$user->image}") }}"
                                    alt="">
                            @else
                                <img class="img-account-profile mb-2 img-fluid" src="{{ asset('assets/img/logo.png') }}"
                                    alt="">
                            @endif

                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body text-center">

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nome</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->name }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">CEP</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->address->code ?? 'Não informado' }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Estado</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->address->state ?? 'Não informado' }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Cidade</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->address->city ?? 'Não informado' }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Bairro</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->address->neighborhood ?? 'Não informado' }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Número</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->address->number ?? 'Não informado' }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Complemento</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->address->complement ?? 'Não informado' }}</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row text-center">
                                    <p>Contatos</p>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->email ?? 'Não informado' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Telefone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->contact->tel ?? 'Não informado' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Whatsapp</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->contact->whatsapp ?? 'Não informado' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Facebook</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->contact->facebook ?? 'Não informado' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Instagram</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->contact->instagram ?? 'Não informado' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Site</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->contact->site ?? 'Não informado' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row text-center">
                                    <p>Descrição</p>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="mb-0">{{ $user->description ?? 'Não informado' }}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

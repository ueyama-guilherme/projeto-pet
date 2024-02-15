@extends('admin.layout')
@section('imagem_perfil')
    <div class="card mb-4 mb-xl-0">
        <div class="card-header">Imagem do perfil</div>
        <div class="card-body text-center">
            @if ($user->image)
                <img class="img-account-profile mb-2 img-fluid" src="{{ url("storage/{$user->image}") }}"
                    alt="">
            @else
                <img class="img-account-profile mb-2 img-fluid" src="{{ asset('assets/img/logo.png') }}" alt="">
            @endif
        </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal">
                Adicionar imagem
            </button>

            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="imageModalLabel">Imagem</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.createImage', $user) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="small mb-1" for="image">Selecione uma imagem</label>
                                    <input class="form-control" id="image" name="image" type="file">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-primary">
                                        @if ($user->image)
                                            Atualizar
                                            @else
                                            Adicionar
                                        @endif
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
    </div>
@endsection
@section('admin_perfil')
    <div class="col-xl-8">
        <div class="card mb-4">
            <div class="card-header">Detalhes da conta</div>
            <div class="card-body">
                <form action="{{ route('admin.update', $user) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="small mb-1" for="name">Abrigo</label>
                        <input class="form-control" id="name" name="name" type="text"
                            value="{{ $user->name }}">
                    </div>

                    <div class="mb-3">
                        <label class="small mb-1" for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="email"
                            value="{{ $user->email }}">
                    </div>

                    <div class="mb-3">
                        <label class="small mb-1" for="description">Sobre</label>
                        <textarea class="form-control" id="description" name="description" rows="5" style="resize: none"
                            placeholder="Descreva seu abrigo">{{ $user->description }}</textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

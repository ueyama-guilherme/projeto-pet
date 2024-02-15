@extends('layout')
@section('title', 'User')

@section('content')
    <div class="container-xl px-4 mt-4 mb-4" style="height: 100vh">
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="{{ route('admin.profile', $user) }}">Perfil</a>
            <a class="nav-link" href="{{ route('admin.address', $user) }}">Endereço</a>
            <a class="nav-link" href="{{ route('admin.contact', $user) }}">Contato</a>
            <button type="button" class="nav-link text-danger" data-bs-toggle="modal" data-bs-target="#deleteUser">
                Excluir conta
            </button>

            <div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="deleteUserLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="deleteUserLabel">Excluir conta</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Todos os seus dados serão apagados do site</p>
                            <p>Tem certeza que gostaria de exluir seu cadastro?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                            <form action="{{route('admin.destroy', $user)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Sim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                @yield('imagem_perfil')
                @yield('info')
            </div>
            @yield('admin_perfil')
        </div>
    </div>

@endsection

@stack('cep')

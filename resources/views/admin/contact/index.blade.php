@extends('admin.layout')
@section('info')
    <div class="card mb-4 mb-xl-0">
        <div class="card-header">Contatos</div>
        <div class="card-body text-center">

            @if ($user->contact()->count() == 0)
                <p>
                    <a href="{{ route('contact.create', $user) }}" class="btn btn-primary">Cadastrar contato</a>
                </p>
            @else
                <p>
                    <a href="{{ route('contact.edit', $user) }}" class="btn btn-secondary">Atualizar contato</a>
                </p>
                <x-modal name="Excluir" title="Excluir contato" text="Tem certeza que deseja excluir?">
                    <form action="{{ route('contact.delete', $user) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </x-modal>
            @endif
        </div>
    </div>
@endsection
@section('admin_perfil')
    <div class="col-xl-8">
        @isset($mensagem)
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endisset
        <div class="card mb-4">
            <div class="card-header">Contatos</div>
            @if ($user->contact()->count() == 0)
                <p class="text-center">Sem informações de contato cadastrados</p>
            @else
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Telefone</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->contact->tel }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Whatsapp</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->contact->whatsapp }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Facebook</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->contact->facebook }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Instagram</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->contact->instagram }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Site</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->contact->site }}</p>
                        </div>
                    </div>
                </div>
        </div>
        @endif
    </div>
    </div>
@endsection

@extends('admin.layout')
@section('info')
    <div class="card mb-4 mb-xl-0">
        <div class="card-header">Endereço</div>
        <div class="card-body text-center">

            @if ($user->address()->count() == 0)
                <p>
                    <a href="{{ route('address.create', $user) }}" class="btn btn-primary">Adicionar endereço</a>
                </p>
            @else
                <p>
                    <a href="{{ route('address.edit', $user) }}" class="btn btn-secondary">Atualizar endereço</a>
                </p>
              <x-modal name="Excluir" title="Excluir endereço" text="Tem certeza que deseja excluir?">
                <form action="{{ route('address.delete', $user) }}" method="POST">
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
            {{$mensagem}}
        </div>
        @endisset
        <div class="card mb-4">
            <div class="card-header">Endereço</div>
            @if ($user->address()->count() == 0)
                <p class="text-center">Sem endereço cadastrado</p>
            @else
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">CEP</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->address->code }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Estado</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->address->state }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Cidade</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->address->city }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Bairro</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->address->neighborhood }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Numero</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->address->number }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Complemento</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $user->address->complement }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

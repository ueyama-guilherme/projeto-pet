@extends('admin.layout')
@section('info')
    <div class="card mb-4 mb-xl-0">
        <div class="card-header">Endereço</div>
        <div class="card-body text-center">

            @if ($user->address()->count() == 0)
                <p>
                    <a href="{{ route('address.create', $user) }}" class="btn btn-primary">Cadastrar endereço</a>
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
    <div class="card mb-4">
        <div class="card-header">Endereço</div>

        <div class="card-body">
            <form action="{{route('address.store', $user)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="small mb-1" for="code">CEP</label>
                    <input class="form-control" id="code" name="code" type="text" placeholder="Digite seu CEP" onblur="pesquisacep(this.value)">
                </div>

                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <label class="small mb-1" for="state">Estado</label>
                        <input class="form-control" id="state" name="state" type="text">
                    </div>
                    <div class="col-md-6">
                        <label class="small mb-1" for="city">Cidade</label>
                        <input class="form-control" id="city" name="city" type="text">
                    </div>
                </div>

                <div class="row gx-3 mb-3">
                    <div class="col-md-5">
                        <label class="small mb-1" for="neighborhood">Bairro</label>
                        <input class="form-control" id="neighborhood" name="neighborhood" type="text">
                    </div>
                    <div class="col-md-5">
                        <label class="small mb-1" for="street">Rua</label>
                        <input class="form-control" id="street" name="street" type="text">
                    </div>
                    <div class="col-md-2">
                        <label class="small mb-1" for="number">Número</label>
                        <input class="form-control" id="number" name="number" type="text">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="small mb-1" for="complement">Complemento</label>
                    <input class="form-control" id="complement" name="complement" type="text">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                  </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('cep')
    <script src="{{asset('js/cep.js')}}"></script>
@endpush

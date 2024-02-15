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
    <div class="card mb-4">
        <div class="card-header">Contatos</div>

        <div class="card-body">
            <form action="{{route('contact.store', $user)}}" method="POST">
                @csrf


                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <label class="small mb-1" for="tel">Telefone</label>
                        <input class="form-control" id="tel" name="tel" type="text" placeholder="Digite um telefone">
                    </div>
                    <div class="col-md-6">
                        <label class="small mb-1" for="whatsapp">Whatsapp</label>
                        <input class="form-control" id="whatsapp" name="whatsapp" type="text"  placeholder="Digite um whatsapp">
                    </div>
                </div>

                <div class="row gx-3 mb-3">
                    <div class="col-md-5">
                        <label class="small mb-1" for="facebook">Facebook</label>
                        <input class="form-control" id="facebook" name="facebook" type="text"  placeholder="Insira seu link do facebook">
                    </div>
                    <div class="col-md-5">
                        <label class="small mb-1" for="instagram">Instagram</label>
                        <input class="form-control" id="instagram" name="instagram" type="text" placeholder="Insira seu link do instagram">
                    </div>

                </div>
                <div class="col-md-5">
                    <label class="small mb-1" for="site">Site</label>
                    <input class="form-control" id="site" name="site" type="text" placeholder="Insira seu link do site">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                  </div>
            </form>
        </div>
    </div>
</div>
@endsection

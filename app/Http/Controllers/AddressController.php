<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AddressController extends Controller
{
    public function index(User $user, Request $req)
    {
        $mensagem = $req->session()->get('mensagem');
        return view('admin.address.index', compact('user', 'mensagem'));
    }

    public function create(User $user)
    {
        return view('admin.address.create', compact('user'));
    }

    public function store(Request $req, User $user)
    {

        $data = $req->except('_token');
        $user->address()->create($data);
        return redirect()->route('admin.address', compact('user'))->with('mensagem', 'Endereço cadastrado com sucesso');
    }

    public function edit(User $user)
    {
        return view('admin.address.edit', compact('user'));
    }

    public function update(User $user, Request $req)
    {
        $data = $req->except('_token', '_method');

        $user->address()->update([
            'code' => $data['code'],
            'state' => $data['state'],
            'city' => $data['city'],
            'neighborhood' => $data['neighborhood'],
            'street' => $data['street'],
            'number' =>  $data['number'],
            'complement' => $data['complement']
        ]);
        return redirect()->route('admin.address', compact('user'))->with('mensagem', 'Endereço atualizado com sucesso');
    }

    public function destroy(User $user)
    {
        $user->address()->delete();
        return redirect()->route('admin.address', compact('user'))->with('mensagem', 'Endereço excluido com sucesso');
    }
}

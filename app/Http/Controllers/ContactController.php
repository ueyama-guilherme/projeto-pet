<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(User $user, Request $req)
    {
        $mensagem = $req->session()->get('mensagem');
        return view('admin.contact.index', compact('user', 'mensagem'));
    }

    public function create(User $user)
    {
        return view('admin.contact.create', compact('user'));
    }

    public function store(Request $req, User $user)
    {

        $data = $req->except('_token');
        $test = $user->contact()->create($data);
        return redirect()->route('admin.contact', compact('user'))->with('mensagem', 'Contatos cadastrado com sucesso');
    }

    public function edit(User $user)
    {
        return view('admin.contact.edit', compact('user'));
    }

    public function update(User $user, Request $req)
    {
        $data = $req->except('_token', '_method');

        $user->contact()->update([
            'tel' => $data['tel'],
            'whatsapp' => $data['whatsapp'],
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'site' => $data['site'],
        ]);
        return redirect()->route('admin.contact', compact('user'))->with('mensagem', 'Contatos atualizado com sucesso');
    }

    public function destroy(User $user)
    {
        $user->contact()->delete();
        return redirect()->route('admin.contact', compact('user'))->with('mensagem', 'Contatos excluido com sucesso');
    }
}

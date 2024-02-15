<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.register');
    }

    public function store(Request $req)
    {
        $user = $req->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique(User::class)],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()],
        ]);
        $user['password'] = Hash::make($user['password']);
        $user = User::create($user);
        Auth::login($user);
        return redirect()->route('admin.profile', $user);
    }

    public function profile(User $user)
    {
        return view('admin.dashboard', compact('user'));
    }

    public function update(User $user, Request $req)
    {
        $data =  $req->validate([
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', 'unique:users,email,' . auth()->user()->id],
            'description' => ['string', 'max:512']
        ]);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->description = $data['description'];
        $user->save();
        return redirect()->route('admin.profile', compact('user'));
    }

    public function createImage(User $user, Request $req)
    {
        $imgOld = $user->image;
        $img = $req->validate([
            'image' => 'required', 'max:2048', 'image'
        ]);

        if ($imgOld != null)
        {
            Storage::delete($imgOld);
        }

        if ($img)
        {
            $path = $req->image->store("users");
        }

        $user->image = $path;
        $user->save();
        return redirect()->route('admin.profile', compact('user'));
    }

    public function destroy(User $user, Request $req)
    {
        User::findOrFail($user->id)->delete();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('index');
    }
}

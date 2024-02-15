<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function list()
    {
        $users = User::paginate(4);
        return view('list', compact('users'));
    }

    public function details(User $user)
    {
        return view('details', compact('user'));
    }

    public function search(Request $req)
    {
        $search = $req->search;
        $usersSearch = User::where(function ($query) use ($search)
        {
            $query->where('name', 'like', "%$search%");
        })
            ->orWhereHas('address', function ($query) use ($search)
            {
                $query->where('code', 'like', "%$search%")
                    ->orWhere('state', 'like', "%$search%")
                    ->orWhere('city', 'like', "%$search%")
                    ->orWhere('neighborhood', 'like', "%$search%");
            })
            ->paginate(4);
        return view('list-search', compact('usersSearch'));
    }
}

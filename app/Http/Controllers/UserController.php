<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index',
            ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:6'
        ]);
        
        User::create($input);    
        return redirect()->route('users.index')
        ->with('status', 'Usuário criado com sucesso!');
    }

    public function edit (User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update (User $user, Request $request)
    {
          $input = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'exclude_if:password,null|min:6'
        ]);
        $user->fill($input);
        $user->save();

        return redirect()
        ->route('users.index', $user)
        ->with('status', 'Usuário atualizado com sucesso!');
        
    }

    public function updateProfile(User $user, Request $request)
    {
        dd($request->all());
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()
        ->with('status', 'Usuário deletado com sucesso!');
    }


}

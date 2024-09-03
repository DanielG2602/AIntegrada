<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'=> 'required|email',
            'senha' => 'required|senha'
        ], [
            'email.required' => 'email obrigatorio',
            'email.email' => 'email invalido',
            'senha.required' => 'senha obrigatorio',
        ]);

        $credentials = $request->only('email', 'senha');
        $authenticate = auth::attempt($credentials);
        if(!$authenticate){
            return redirect()->route('login.index')->withErrors(['error'=> 'email ou senha invalida']);
        }

        return redirect()->route('login.index')->with('sucess','logged in');

    }

    public function destroy()
    {
        auth::logout();
        return redirect()->route('login.index');
    }

}

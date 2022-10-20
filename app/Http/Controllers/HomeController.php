<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function cadastrar() {
        return view('cadastrar');
    }

    public function cadastrar_salvar(Request $request) {
       
        $usuario = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dtnascimento' => $request->dtnascimento, 
            'cpf' => $request->cpf, 
            'telefone' => $request->telefone, 
            'genero' => $request->genero, 
            'cep' => $request->cep, 
            'logradouro' => $request->logradouro, 
            'numero' => $request->numero, 
            'complemento' => $request->complemento, 
            'bairro' => $request->bairro, 
            'cidade' => $request->cidade, 
            'uf' => $request->uf
        ]);

        return view('home');
    }
}

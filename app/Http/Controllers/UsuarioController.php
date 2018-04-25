<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function index()
	{
		$usuarios =User::all();
		//dd($clientes);
    	return view('usuarios.lista',compact('usuarios'));
	}
	public function create()
	{
		//dd($clientes);
    	return ('junior');
	}
}

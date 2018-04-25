<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    
	public function index()
	{
		$clientes =Cliente::all();
		//dd($clientes);
    	return view('clientes.lista',['clientes'=> $clientes]);
	}

	public function create()
	{
        return view('clientes.create');
	}

	public function show(Cliente $cliente)
	{
		//$cliente = Cliente::find($id_cliente);
         return view('clientes.show',compact('cliente'));

       
	}

	public function edit(Cliente $cliente)
	{
		return view('clientes.edit',compact('cliente'));
	}

	public function store(ClienteRequest $request)
	{
		 //dd(request()->all());
        //Nota::Create(request()->all());
        //return redirect('notas');

        //Nota::Create(['titulo' => 'valor_titulo', 'descripcion' => 'valor_descripcion', 'prioridad' => 'valor_prioridad']);
        
        //dd(request()->all());

        /*request()->validate([
            'titulo'=> 'required',
            'descripcion' => 'required|min:20',
        ]);*/

        $cliente = new Cliente;
        $cliente->cod_cliente = request()->codigo;
        $cliente->id_empresa = Auth::user()->id_empresa;
        $cliente->nombre = request()->nombre;
        $cliente->tipo_documento = request()->tipodoc;
        $cliente->numero_documento = request()->numerodoc;
        $cliente->email = request()->email;
        $cliente->estado = request()->estado;
        $cliente->usuario_crea = Auth::user()->name;
        $cliente->usuario_modi = Auth::user()->name;
        $cliente->save();
        return redirect('clientes');
	}

	public function update(Cliente $cliente, ClienteRequest $request)
    {
        $cliente->cod_cliente = request()->codigo;
        $cliente->id_empresa = Auth::user()->id_empresa;
        $cliente->nombre = request()->nombre;
        $cliente->tipo_documento = request()->tipodoc;
        $cliente->numero_documento = request()->numerodoc;
        $cliente->email = request()->email;
        $cliente->estado = request()->estado;
        $cliente->usuario_crea = Auth::user()->name;
        $cliente->usuario_modi = Auth::user()->name;
        $cliente->save();
        return redirect('clientes');
    }

    public function eliminar(Cliente $cliente)
    {
        $cliente->cod_cliente = request()->codigo;
        $cliente->cod_empresa = Auth::user()->empresa;
        $cliente->nombre = request()->nombre;
        $cliente->tipo_documento = request()->tipodoc;
        $cliente->numero_documento = request()->numerodoc;
        $cliente->email = request()->email;
        $cliente->estado = 'X';
        $cliente->usuario_crea = Auth::user()->name;
        $cliente->usuario_modi = Auth::user()->name;
        $cliente->save();
        return redirect('clientes');
    }

	public function destroy(Cliente $cliente)
	{
		$cliente->delete();
        return redirect ('clientes');
	}
	
}

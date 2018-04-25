<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Automovil;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AutomovilRequest;

class AutomovilController extends Controller
{
   public function index()
	{
		$automoviles =Automovil::all();
    	return view('automoviles.lista',compact('automoviles'));
	}

	public function create()
	{
        return view('automoviles.create');
		
	}

	public function show(Automovil $automovil)
	{
		//$Automovil = Automovil::find($id_Automovil);
        return view('automoviles.show',compact('automovil'));
	}

	public function edit(Automovil $automovil)
	{
		return view('automoviles.edit',compact('automovil'));
	}

	public function store(AutomovilRequest $request)
	{
        $automovil = new Automovil;
        $automovil->id_empresa = Auth::user()->id_empresa;
        $automovil->alias = request()->alias;
        $automovil->descripcion = request()->descripcion;
        $automovil->placa = request()->placa;
        $automovil->estado = request()->estado;
        $automovil->numero_movil = request()->numero_movil;
        $automovil->imei_movil = request()->imei_movil;
        $automovil->usuario_crea = Auth::user()->name;
        $automovil->usuario_modi = Auth::user()->name;
        $automovil->save();
        return redirect('automoviles');
	}

	public function update(Automovil $automovil, AutomovilRequest $request)
    {
        $automovil->alias = request()->alias;
        $automovil->descripcion = request()->descripcion;
        $automovil->placa = request()->placa;
        $automovil->estado = request()->estado;
        $automovil->numero_movil = request()->numero_movil;
        $automovil->imei_movil = request()->imei_movil;
        $automovil->usuario_modi = Auth::user()->name;
        $automovil->save();
        return redirect('automoviles');
    }

    public function eliminar(Automovil $automovil)
    {
        $automovil->cod_Automovil = request()->codigo;
        $automovil->cod_empresa = Auth::user()->empresa;
        $automovil->nombre = request()->nombre;
        $automovil->tipo_documento = request()->tipodoc;
        $automovil->numero_documento = request()->numerodoc;
        $automovil->email = request()->email;
        $automovil->estado = 'X';
        $automovil->usuario_crea = Auth::user()->name;
        $automovil->usuario_modi = Auth::user()->name;
        $automovil->save();
        return redirect('automoviles');
    }

	public function destroy(Automovil $automovil)
	{
		$automovil->delete();
        return redirect ('automoviles');
	}
}

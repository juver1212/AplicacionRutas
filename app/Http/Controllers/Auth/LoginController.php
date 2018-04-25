<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    |
      Este controlador maneja la autenticación de usuarios para la aplicación y
    | redirigiéndolos a su pantalla de inicio. El controlador usa un rasgo
    | para proporcionar convenientemente su funcionalidad a sus aplicaciones.
    |
    */

    use AuthenticatesUsers;

    /**
     * Dónde redirigir a los usuarios después de iniciar sesión.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Crea una nueva instancia de controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

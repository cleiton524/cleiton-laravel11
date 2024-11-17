<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está autenticado e se o papel é 'admin'
if (!Auth::check() || Auth::user()->role !== 'admin') {
    return redirect('/'); // Redireciona para a página inicial
}


        // Redireciona para uma página de erro ou login, se necessário
        return redirect('login')->with('error', 'Acesso negado. Somente administradores podem acessar.');
    }
}


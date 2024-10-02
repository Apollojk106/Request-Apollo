<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

class RequestController extends Controller
{
    public function RequestForm(StoreRequest $request)
    {
        $dados = $request->validated();

        return view('request', ['dados' => $dados])
        ->with('success', 'Formulario enviado com sucesso!');
    }
}

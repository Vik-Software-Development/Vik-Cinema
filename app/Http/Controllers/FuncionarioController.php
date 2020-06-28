<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use Illuminate\Support\Facades\Hash;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Funcionario/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Funcionario/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (strlen($request->Nome) < 3 || !preg_match('/^[a-z]*$/i', $request->Nome)) {
            //Nome Inválido
        }

        if (strlen($request->CPF) != 11 || !preg_match('/^[0-9]*$/', $request->CPF)) {
            //CPF inválido
        }
        if (strlen($request->Telefone) < 15) {
            //telefone invalido
        }
        if (!filter_var($request->Email, FILTER_VALIDATE_EMAIL)) {
            //email invalido
        }
        if (strlen($request->Senha) < 8) {
            //senha com menos de 8 caracteres
        }

        $newFuncionario = new Funcionario();
        $newFuncionario->Nome = $request->Nome;
        $newFuncionario->CPF = $request->CPF;
        $newFuncionario->Telefone = $request->Telefone;
        $newFuncionario->Email = $request->Email;
        $newFuncionario->Senha = Hash::make($request->Senha);
        $newFuncionario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\Environment\Console;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = "Funcionários";
        return view('Funcionario/index', compact('titulo'))->with('funcionarios', Funcionario::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = "Cadastrar Funcionário";
        return view('Funcionario/create', compact('titulo'));
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
        $save = $newFuncionario->save();

        if($save){
            return redirect()->route('funcionarios.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario)
    {
        $titulo = "Funcionário";
        return view('Funcionario/show', compact('titulo'))->with('funcionario', $funcionario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcionario $funcionario)
    {
        $titulo = "Editar Funcionário";
        return view('Funcionario/edit', compact("titulo"))->with('funcionario', $funcionario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario)
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

        $dados = $request->except('_token');
        $update = $funcionario->update();

        if($update){
            return redirect()->route('funcionarios.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario)
    {
       $delete = $funcionario->delete();

       if($delete){
            return redirect()->route('funcionarios.index');
       }else{
            return redirect()->back();
       }
    }
}

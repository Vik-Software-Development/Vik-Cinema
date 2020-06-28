<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sala;
use App\Http\Requests\SalaFormRequest;

class SalaController extends Controller
{
    private $sala;

    public function __construct(Sala $sala)
    {
        $this->sala = $sala;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = $this->sala->all();
        $titulo = "Listagem das Salas";
        return view('Sala.ListarSalas',compact('salas','titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = "Cadastro de Salas";
        return view('Sala.CadastrarSala', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalaFormRequest $request)
    {
        $dados = $request->except('_token');
        $sala = $this->sala;
        $insert = $sala->create($dados);

        if($insert){
            return redirect()->route('listarSalas');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sala = $this->sala->find($id);
        $titulo = "Ver sala";
        return view('Sala.VerSala', compact('sala','titulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sala = $this->sala->find($id);
        $titulo = "Editar sala";
        return view('Sala.EditarSala', compact('sala','titulo'));
        return"papum {$id}";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalaFormRequest $request, $id)
    {
        $dados = $request->except('_token', '_method');
        $sala = $this->sala->find($id);
        $update = $sala->update($dados);

        if($update){
            return redirect()->route('listarSalas');
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
    public function destroy($id)
    {
        $sala = $this->sala->find($id);
        $delete = $sala->delete();

        if($delete){
            return redirect()->route('listarSalas');
        }else{
            return redirect()->back();
        }
    }
}

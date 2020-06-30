<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sessão;
use App\Sala;
use App\Filme;
use App\Http\Requests\SessaoFormRequest;

class SessaoController extends Controller
{
    private $sessao;
    private $sala;
    private $filme;

    public function __construct(Sessão $sessao, Sala $sala, Filme $filme)
    {
        $this->sessao = $sessao;
        $this->sala = $sala;
        $this->filme = $filme;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessoes = $this->sessao->all();
        foreach ($sessoes as $sessao) {
            $sessao->idFilme =  $this->filme->find($sessao->idFilme)->nome;
            $sessao->idSala = $this->sala->find($sessao->idSala)->nome;
        }
        $titulo = "Listar Sessões";
        return view('Sessão.ListarSessoes',compact('sessoes','titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = "Cadastrar Sessão";
        $hora = ['10:00','14:00','18:00','22:00'];
        return view('Sessão.CadastrarSessao',compact('titulo','hora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SessaoFormRequest $request)
    {
        $filme = $this->filme->where('nome',$request->idFilme)->get();
        if(count($filme) == 0){
            return redirect()->back();
        }
        $sala = $this->sala->where('nome',$request->idSala)->get();
        if(count($sala) == 0){
            return redirect()->back();
        }

        $dados = $request->except('_token');
        $dados['idFilme'] = $filme[0]->id;
        $dados['idSala'] = $sala[0]->id;
        $sessao = $this->sessao;
        $insert = $sessao->create($dados);

        if($insert){
            return redirect()->route('listarSessoes');
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

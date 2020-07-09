<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;
use App\Http\Requests\FilmeFormRequest;

class FilmeController extends Controller
{
    private $filme;

    public function __construct(Filme $filme)
    {
        $this->filme = $filme;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmes = $this->filme->all();
        $titulo = "Filmes";
        return view('Filme.ListarFilmes', compact('filmes','titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $genero = [
            'Ação',
            'Animação',
            'Aventura',
            'Cinema de arte',
            'Chanchada',
            'Comédia',
            'Comédia de ação',
            'Comédia de terror',
            'Comédia dramática',
            'Comédia romântica',
            'Dança',
            'Documentário',
            'Docuficção',
            'Drama',
            'Espionagem',
            'Faroeste',
            'Fantasia científica',
            'Ficção científica',
            'Filmes de guerra',
            'Musical',
            'Filme policial',
            'Romance',
            'Seriado',
            'Suspense',
            'Terror',
            'Thriller'
       ];
        $titulo = "Casdastrar Filmes";
        return view('Filme.CadastrarFilme',compact('titulo','genero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmeFormRequest $request)
    {
        $dados = $request->except('_token');
        $filme = $this->filme;
        $insert = $filme->create($dados);

        if($insert){
            return redirect()->route('filmes.index');
        }else{
            return redirect()->back()->withErrors(['Filme não cadastrado.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Filme $filme)
    {
        $titulo = "Ver filme";
        return view('Filme.VerFilme',compact('filme','titulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Filme $filme)
    {
        $genero = [
            'Ação',
            'Animação',
            'Aventura',
            'Cinema de arte',
            'Chanchada',
            'Comédia',
            'Comédia de ação',
            'Comédia de terror',
            'Comédia dramática',
            'Comédia romântica',
            'Dança',
            'Documentário',
            'Docuficção',
            'Drama',
            'Espionagem',
            'Faroeste',
            'Fantasia científica',
            'Ficção científica',
            'Filmes de guerra',
            'Musical',
            'Filme policial',
            'Romance',
            'Seriado',
            'Suspense',
            'Terror',
            'Thriller'
       ];
        $titulo = "Editar Filme";
        return view('Filme.EditarFilme',compact('filme','titulo','genero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FilmeFormRequest $request,Filme $filme)
    {
        $dados = $request->except('_token','_method');
        $update = $filme->update($dados);

        if($update){
            return redirect()->route('filmes.index');
        }else{
            return redirect()->back()->withErrors(['Filme não atualizado.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filme $filme)
    {
        $delete = $filme->delete();

        if($delete){
            return redirect()->route('filmes.index');
        }else{
            return redirect()->back()->withErrors(['Filme não deletado.']);
        }
    }
}

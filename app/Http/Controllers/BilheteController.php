<?php

namespace App\Http\Controllers;

use App\Bilhete;
use App\Sessão;
use Illuminate\Http\Request;

class BilheteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Bilhete.index')->with('bilhetes', Bilhete::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('Bilhete.create')->with('sessoes', Sessão::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newBilhete = new Bilhete();
        $newBilhete->preco = $request->preco;
        $newBilhete->sessao = $request->sessao;
        $newBilhete->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bilhete  $bilhete
     * @return \Illuminate\Http\Response
     */
    public function show(Bilhete $bilhete)
    {
        return view('Bilhete.show')->with('bilhete', $bilhete);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bilhete  $bilhete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bilhete $bilhete)
    {
        $bilhete->delete();
    }
}

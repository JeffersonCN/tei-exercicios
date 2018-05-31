<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;

class ArtigoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Artigo::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novoArtigo = new Artigo($request->all());
        $novoArtigo->save();

        return response()->json($novoArtigo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artigo = Artigo::find($id);
        return response()->json($artigo, $artigo ? 200 : 404);
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
        $artigo = Artigo::find($id);

        if (!$artigo)
        {
            return response()->json([], 404);
        }

        $artigo->update($request->all());

        return response()->json($artigo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artigo = Artigo::find($id);

        if (!$artigo)
        {
            return response()->json([], 404);
        }

        Artigo::destroy($id);

        response()->json($artigo, 204);
    }
}

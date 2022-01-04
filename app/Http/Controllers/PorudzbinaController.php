<?php

namespace App\Http\Controllers;

use App\Http\Resources\PorudzbinaResource;
use App\Models\Porudzbina;
use Illuminate\Http\Request;

class PorudzbinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porudzbine = Porudzbina::all();
        return PorudzbinaResource::collection($porudzbine);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new PorudzbinaResource(Porudzbina::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function edit(Porudzbina $porudzbina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Porudzbina $porudzbina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $p = Porudzbina::find($id);
       if($p){
           $p->delete();
           return response()->json(['Porudzbina je obrisana!',new PorudzbinaResource($p)]);
       }else{
           return response()->json('Trazena porudzbina ne postoji u bazi!');
       }
    }
}

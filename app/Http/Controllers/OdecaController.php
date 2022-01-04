<?php

namespace App\Http\Controllers;

use App\Http\Resources\OdecaResource;
use App\Models\Odeca;
use Illuminate\Http\Request;

class OdecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $odeca =Odeca::all();
        return OdecaResource::collection($odeca);
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
     * @param  \App\Models\Odeca  $odeca
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new OdecaResource(Odeca::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Odeca  $odeca
     * @return \Illuminate\Http\Response
     */
    public function edit(Odeca $odeca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Odeca  $odeca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Odeca $odeca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Odeca  $odeca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Odeca $odeca)
    {
        //
    }
}

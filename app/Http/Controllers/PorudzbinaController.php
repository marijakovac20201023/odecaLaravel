<?php

namespace App\Http\Controllers;

use App\Http\Resources\PorudzbinaResource;
use App\Models\Porudzbina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request) //cuva objekte u bazi pozivanjem post metode
    {
        $validator = Validator::make($request->all(), [
            'adresaDostave' => 'required|string|max:100',
            'cena' => 'required',
            'status' => 'required|string', 
            'odeca_id' => 'required'
            //polje user_id ne stavljamo u validator jer ce to zapravo biti id ulogovanog korisnika jer je on kreirao porudzbinu
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $p = Porudzbina::create([
            'adresaDostave' => $request->adresaDostave, 
            'cena' => $request->cena, 
            'status' => $request->status,
            'odeca_id' => $request->odeca_id, 
           
            'user_id' => Auth::user()->id
        ]);

        return response()->json(['Porudzbina uspesno kreirana!', new PorudzbinaResource($p)]);
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
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'adresaDostave' => 'required|string|max:100',
            'cena' => 'required',
            'status' => 'required|string', 
            'odeca_id' => 'required'
            //polje user_id ne stavljamo u validator jer ce to zapravo biti id ulogovanog korisnika jer je on kreirao porudzbinu
        ]);

        $p =  Porudzbina::find($id);
        if($p){
            $p->adresaDostave = $request->adresaDostave;
            $p->cena = $request->cena;
            $p->status = $request->status;
            $p->odeca_id = $request->odeca_id;
            $p->save();
            return response()->json(['Porudzbina uspesno izmenjena!', new PorudzbinaResource($p)]);

        }else{
            return response()->json('Ne postoji trazena porudzbina!');

        }

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

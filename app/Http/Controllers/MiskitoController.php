<?php

namespace App\Http\Controllers;

use App\Models\Miskito;
use Illuminate\Http\Request;

class MiskitoController extends Controller
{


    public $rules = [
        "palabra" => ['required', 'string'],
        "descripcion" => ['required', 'string'],
    ];

    public function index()
    {
        $rows = Miskito::query()
        ->orderBy('id', 'desc')
        ->get();
        return view('app.miskitos.index', compact("rows"));
    }

  
    public function create()
    {
        // $model= false;
        return view('app.miskitos.add');
    }

   
    public function store(Request $request)
    {
        $campos=$this->validate($request,$this->rules);
        $model=Miskito::query()->create($campos);
        return redirect()->route('miskito');
    }

  
    public function show(Miskito $miskito)
    {
        //
    }

   
    public function edit(Miskito $miskito)
    {
        return view('app.miskitos.edit', compact('miskito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miskito  $miskito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miskito $model)
    {
        $campos=$this->validate($request,$this->rules);

        $model->update($campos);

        $model->save();
        return redirect()->route('miskito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miskito  $miskito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miskito $miskito)
    {
        $miskito->delete();
        return redirect()->route('miskito');
    }
}

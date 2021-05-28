<?php

namespace App\Http\Controllers;

use App\Models\Garifuna;
use Illuminate\Http\Request;

class GarifunaController extends Controller
{
    public $rules = [
        "palabra" => ['required', 'string'],
        "descripcion" => ['required', 'string'],
    ];
    public function index(Request $request)
    {
        $rows = Garifuna::query()
        ->orderBy('id', 'desc')
        ->get();

    return view('app.garifuna.index', compact('rows'));
    }

   
    public function create()
    {
        return view('app.garifuna.add');
    }

    public function store(Request $request)
    {
        $campos=$this->validate($request,$this->rules);
        $model=Garifuna::query()->create($campos);
        return redirect()->route('garifuna');
    }

   
    public function show(Garifuna $garifuna)
    {
        //
    }

   
    public function edit(Garifuna $model)
    {
        return view('app.garifuna.edit',compact('model'));
    }

   
    public function update(Garifuna $model, Request $request)
    {
        $campos=$this->validate($request,$this->rules);
        $model->fill($campos);
        $model->save();
        return redirect()->route('garifuna');
    }


    public function destroy(Garifuna $garifuna)
    {
        $garifuna->delete();
        return redirect()->route('garifuna');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Rama;
use Illuminate\Http\Request;

class RamaController extends Controller
{
    
     
    public $rules = [
        "palabra" => ['required', 'string'],
        "descripcion" => ['required', 'string'],
    ];

    public function index()
    {
        $rows = Rama::query()
        ->orderBy('id', 'desc')
        ->get();
        return view('app.ramas.index', compact("rows"));
    }

    
    public function create()
    {
        return view('app.rams.add');
    }

   
    public function store(Request $request)
    {
        $campos=$this->validate($request,$this->rules);
        $model=Rama::query()->create($campos);
        return redirect()->route('rama');
    }

   
    public function show(Rama $rama)
    {
        //
    }

   
    public function edit(Rama $rama)
    {
        return view('app.ramas.edit',compact('rama'));
    }

    
    public function update(Rama $model, Request $request)
    {
        $campos=$this->validate($request,$this->rules);
        $model->fill($campos);
        $model->save();
        return redirect()->route('rama');
    }

  
    public function destroy(Rama $rama)
    {
        $rama->delete();
        return redirect()->route('rama');
    }
}

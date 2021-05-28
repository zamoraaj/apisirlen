<?php

namespace App\Http\Controllers;

use App\Models\Mayagna;
use Illuminate\Http\Request;

class MayagnaController extends Controller
{
   
    public $rules = [
        "palabra" => ['required', 'string'],
        "descripcion" => ['required', 'string'],
    ];

    public function index()
    {
        $rows = Mayagna::query()
        ->orderBy('id', 'desc')
        ->get();
        return view('app.mayagnas.index', compact("rows"));
    }

   
    public function create()
    {
        return view('app.mayagnas.add');
    }

  
    public function store(Request $request)
    {
        $campos=$this->validate($request,$this->rules);
        $model=Mayagna::query()->create($campos);
        return redirect()->route('mayagna');
    }

  
    public function show(Mayagna $mayagna)
    {
        //
    }

   
    public function edit(Mayagna $mayagna)
    {
        return view('app.mayagnas.edit',compact('mayagna'));
    }

   
    public function update(Mayagna $model, Request $request)
    {
        $campos=$this->validate($request,$this->rules);
        $model->fill($campos);
        $model->save();
        return redirect()->route('mayagna');
    }

   
    public function destroy(Mayagna $mayagna)
    {
        $mayagna->delete();
        return redirect()->route('mayagna');
    }
}

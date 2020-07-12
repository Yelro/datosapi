<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class persona1Controller extends Controller
{
    public function index()
    {
        $item= Persona::all();
         return response()->json(['persona'=>$item]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $item= Persona::find($id);
         return response()->json(['persona'=>$item]);
    }


    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}

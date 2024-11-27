<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::all();
        return view('carro.index', compact('carros'));
    }
    
    public function create()
    {
        return view('carro.create');
    }
    
    public function store(Request $request)
    {
        Carro::create($request->all());
        return redirect('carros')->with('success', 'Carro created successfully.');
    }
    
    public function edit($id)
    {
        $dono = Carro::findOrFail($id);
        return view('carro.edit', compact('dono'));
    }
    
    public function update(Request $request, $id)
    {
        $dono = Carro::findOrFail($id);
        $dono->update($request->all());
        return redirect('carros')->with('success', 'Carro updated successfully.');
    }
    
    public function destroy($id)
    {
        $dono = Carro::findOrFail($id);
        $dono->delete();
        return redirect('carros')->with('success', 'Carro deleted successfully.');
    }
}

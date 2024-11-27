<?php

namespace App\Http\Controllers;

use App\Models\Dono;
use Illuminate\Http\Request;

class DonoController extends Controller
{
        public function index()
    {
        $donos = Dono::all();
        return view('dono.index', compact('donos'));
    }

    public function create()
    {
        return view('dono.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $dono = new Dono();
        $dono->name = $request->name;
        $dono->id_carro = $request->id_carro;
        $dono->save();
        return redirect('donos')->with('success', 'Dono created successfully.');
    }

    public function edit($id)
    {
        $dono = Dono::findOrFail($id);
        return view('dono.edit', compact('dono'));
    }

    public function update(Request $request, $id)
    {
        $dono = Dono::findOrFail($id);
        $dono->update($request->all());
        return redirect('donos')->with('success', 'dono updated successfully.');
    }

    public function destroy($id)
    {
        $dono = Dono::findOrFail($id);
        $dono->delete();
        return redirect('donos')->with('success', 'dono deleted successfully.');
    }
}

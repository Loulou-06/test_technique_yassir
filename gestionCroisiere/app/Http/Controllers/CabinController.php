<?php

namespace App\Http\Controllers;

use App\Models\Cabin;
use Illuminate\Http\Request;

class CabinController extends Controller
{
        public function index()
    {
        $cabins = Cabin::all();
        return view('cabins.index', compact('cabins'));
    }

    public function create()
    {
        // $Cabin = Cabin::all();
        // return view('cabins.create', compact('cabin'));
        return view('cabins.create');
    }

    public function store(Request $request)
    {
        $cabin = new Cabin();
        $cabin->name = $request->input('name');
        $cabin->image = $request->input('image');
        $cabin->description = $request->input('description');
        $cabin->area = $request->input('area');
        $cabin->cruise_ship_id = $request->input('cruise_ship_id');
        $cabin->save();

        return redirect()->route('cabins.index')->with('success','cabine créé avec succès');
    }

    public function show($id)
    {
        $cabin = Cabin::find($id);
        return view('cabins.show', compact('cabin'));
    }

    public function edit($id)
    {
        $cabin = Cabin::find($id);
        $Cabins = Cabin::all();
        return view('cabins.edit', compact('cabin', 'Cabins'));
    }

    public function update(Request $request, $id)
    {
        $cabin = Cabin::find($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',
            'description' => 'required',
            'area' => 'required',
            'cruise_ship_id' => 'required',
        ]);
        Cabin::whereId($id)->update($validatedData);
        // $cabin->name = $request->input('name');
        // $cabin->description = $request->input('description');
        // $cabin->price = $request->input('price');
        // $cabin->cruise_ship_id = $request->input('cabin_id');
        // $cabin->save();

        return redirect()->route('cabins.index')->with('success','bateau mis à jour avec succès');
    }
    public function destroy($id)
    {
        $cabin = Cabin::find($id);
        $cabin->delete();

        return redirect()->route('cabins.index');
    }
}

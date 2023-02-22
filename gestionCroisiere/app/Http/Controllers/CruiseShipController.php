<?php

namespace App\Http\Controllers;

use App\Models\CruiseShip;
use Illuminate\Http\Request;
// use App\Models\Company;

class CruiseShipController extends Controller
{
    public function index()
    {
        $cruiseShips = CruiseShip::all();
        return view('cruiseShips.index', compact('cruiseShips'));
        // $companies = Company::all();
        // return $companies;
        // return view('companies.index', compact('companies'));
    }

    public function create()
    {
        // $companies = CruiseShip::all();
        // return view('cruise-ships.create', compact('companies'));
        return view('cruiseShips.create');
    }

    public function store(Request $request)
    {
        $cruiseShip = new CruiseShip();
        $cruiseShip->name = $request->input('name');
        $cruiseShip->image = $request->input('image');
        $cruiseShip->description = $request->input('description');
        $cruiseShip->year_of_construction = $request->input('year_of_construction');
        $cruiseShip->ship_length = $request->input('ship_length');
        $cruiseShip->ship_width = $request->input('ship_width');
        $cruiseShip->company_id = $request->input('company_id');
        $cruiseShip->save();

        return redirect()->route('cruiseShips.index')->with('success','bateau créé avec succès');
    }

    public function show($id)
    {
        $cruiseShip = CruiseShip::find($id);
        return view('cruiseShips.show', compact('cruiseShip'));
    }

    public function edit($id)
    {
        $cruiseShip = CruiseShip::find($id);
        $companies = CruiseShip::all();
        return view('cruiseShips.edit', compact('cruiseShip', 'companies'));
    }

    public function update(Request $request, $id)
    {
        $cruiseShip = CruiseShip::find($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',
            'description' => 'required',
            'year_of_construction' => 'required',
            'ship_length' => 'required',
            'ship_width' => 'required',
            'company_id' => 'required',

        ]);
        // $cruiseShip->name = $request->input('name');
        // $cruiseShip->image = $request->input('image');
        // $cruiseShip->description = $request->input('description');
        // $cruiseShip->year_of_construction = $request->input('year_of_construction');
        // $cruiseShip->ship_length = $request->input('ship_length');
        // $cruiseShip->ship_width = $request->input('ship_width');
        // $cruiseShip->company_id = $request->input('company_id');
        // $cruiseShip->save();
        CruiseShip::whereId($id)->update($validatedData);
        return redirect()->route('cruiseShips.index')->with('success','bateau mis à jour avec succès');
    }

    public function destroy($id)
    {
        $cruiseShip = CruiseShip::find($id);
        $cruiseShip->delete();

        return redirect()->route('cruiseShips.index');
    }
}

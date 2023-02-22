<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        // return $companies;
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request->input('name');
        $company->logo = $request->input('logo');
        $company->description = $request->input('description');
        $company->save();

        // return $company;
        return redirect()->route('companies.index')->with('success','Produit créé avec succès : </br>'.'Name : ' . $company->name . ' </br> Logo : ' . $company->logo . '  </br> Description : ' . $company->description);
    }

    public function show($id)
    {
        $company = Company::find($id);
        return view('companies.show', compact('company'));
        // return $company;
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'logo' => 'required',
            'description' => 'required'

        ]);
        Company::whereId($id)->update($validatedData);

        // $company->name = $request->input('name');
        // $company->logo = $request->input('logo');
        // $company->description = $request->input('description');
        return redirect()->route('companies.index')->with('success','Produit mis à jour avec succès');
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
        
        return redirect()->route('companies.index')->with('success','Produit supprimé avec succès');;
    }
}

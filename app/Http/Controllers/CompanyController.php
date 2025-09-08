<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $request->validate([
            'companyName' => 'required|string|max:255',
            'about' => 'required|string',
        ]);

        //    Company::create($request->all());
        //
        $request->user()->companies()->create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company was created!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('companies.detail', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $request->validate([
            //'catName' => 'required|string|max:255',
        ]);

        $company->update($request->all());

        return redirect()->route('companies.index')->with('success', 'Company updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company was deleted!');
    }
}

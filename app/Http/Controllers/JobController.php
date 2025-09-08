<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use App\Models\Company;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $companies = Company::all();

        if (Auth::guest()) {
            return redirect('/login');
        }
        return view('jobs.create', compact('categories', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $request->validate([
        ]);

        $request->user()->jobs()->create($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job was created!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.detail', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $categories = Category::all();
        $companies = Company::all();

        if(Auth::user()->cannot('update', $job)) {
            abort(403);
        }

        return view('jobs.edit', compact('job', 'categories', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $request->validate([
        ]);

        $job->update($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {

        if(Auth::user()->cannot('delete', $job)) {
            abort(403);
        }

        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job was deleted!');
    }
}

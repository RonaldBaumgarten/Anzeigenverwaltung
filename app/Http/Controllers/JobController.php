<?php

namespace App\Http\Controllers;

use App\Models\Job;
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
        if (Auth::guest()) {
            return redirect('/login');
        }
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $request->validate([
//            'catName' => 'required|string|max:255',
        ]);

        Job::create($request->all());

        return redirect()->route('autos.index'->with('success', 'Job was created!'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        // next 3 lines work but should better be handled by policy:
        if($job->user->isNot(Auth::user())) {
            abort(403);
        }

        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $request->validate([
            'catName' => 'required|string|max:255',
        ]);

        $job->update($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        Gate::authorize('destroy', $job);
        /*
        $user = Auth::user();

        if ($user->can('destroy', $job)) {
               abort(403, 'Unauthorized');
        }
         */

        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job was deleted!');
    }
}

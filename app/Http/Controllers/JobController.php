<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;

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
        $companies = \App\Models\Company::all();
        $categories = \App\Models\Category::all();
        return view('jobs.create', compact('companies', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
{

   // $this->authorize('create', Job::class);

    $validated = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'salary' => 'required|numeric',
        'location' => 'required',
        'company_id' => 'required|exists:companies,id',
        'category_id' => 'required|exists:categories,id',
    ]);

    $job =Job::create($validated);
    return redirect()->route('jobs.index')->with('success', 'Job wurde erfolgreich erstellt!');
}
    /**
     * Display the specified resource.
     */
     public function show(Job $job)
    {
        $companies = Company::all();
        $categories = Category::all();
        return view('jobs.show', compact('job', 'companies', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
{
    $companies = Company::all();
    $categories = Category::all();
    return view('jobs.edit', compact('job', 'companies', 'categories'));
}
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'salary' => 'required|numeric',
            'location' => 'required',
            'company_id' => 'required|exists:companies,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $job->update($validated);
        return redirect()->route('jobs.index')->with('success', 'Job updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
    
    }
}

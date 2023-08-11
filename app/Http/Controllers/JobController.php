<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Employer;
use App\Models\User;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($search = 'all')
    {
        switch ($search) {
            case 'all':
                $search_for = '%';
                break;
            
            default:
                $search_for = '%'.$search.'%';
                break;
        }
        return Job::where('title','LIKE',$search_for)->orWhere('title','LIKE',$search_for)->orWhere('title','LIKE',$search_for)->latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validateData = $request->validate([
            'title' => 'required|string',
            'location' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
            'requirements' => 'required|string',
            'salary' => 'required|string',
        ]);
       $employerid = User::find(auth()->user()->id)->employer->id;
       return Employer::find($employerid)->job()->create([
            'title' => $request->input('title'),
            'location' => $request->input('location'),
            'category' => $request->input('category'),
            'description' => $request->input('description'),
            'requirements' => $request->input('requirements'),
            'salary' => $request->input('salary'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Job::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required|string',
            'location' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
            'requirements' => 'required|string',
            'salary' => 'required|string',
        ]);
        $job = Job::find($id);
        $job->update($request->all());
        return $job;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

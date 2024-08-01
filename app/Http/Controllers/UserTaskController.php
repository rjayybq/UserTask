<?php

namespace App\Http\Controllers;

use App\Models\UserTask;
use Illuminate\Http\Request;

class UserTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return UserTask::all();
        $data['user_tasks'] = $users = UserTask::paginate(7);
        return view('index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_task');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_name'     => 'required',
            "status"        => 'required',
            "description"   => 'required',
            "deadline"      => 'required|date',
        ]);
        $usertask = new UserTask();
        $usertask-> task_name         = $request['task_name'];
        $usertask-> status        = $request['status'];
        $usertask-> description   = $request['description'];
        $usertask-> deadline          = $request['deadline'];
        $usertask-> save();
        
        return back()->with('success', 'Data saved successfully!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

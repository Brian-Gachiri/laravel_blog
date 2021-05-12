<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $projects = Project::all();

        return view('projects.projects')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Project::create([
            'name' => $request->name,
            'platform' => $request->platform,
            'description' => $request->description,
            'code_url' => $request->code_url,
            'featured_image_url' => $request->featured_image,
            'user_id' => 1,
        ]);

        $projects = Project::all();

        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        
        $project = Project::findorFail($id);

        return view('projects.view-project', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $project = Project::findorFail($id);

        return view('projects.edit-project', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $project = Project::findOrFail($id);

        $project->update([
            'name' => $request->name,
            'description' => $request->description,
            'featured_image_url' => $request->image,
            'code_url' => $request->code_url,
            'platform' => $request->platform,
        ]);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $project = Project::findOrFail($id);

        $project->delete();

        return redirect()->back()->with('message', "Deleted Successfully");

    }

    public function showDetails($id){

        $project = Project::findorFail($id);

        $related_projects = Project::where('platform', 'LIKE', '%'.$project->platform.'%')->get();

        return view('projects.details-project', compact('project', 'related_projects'));

    }

    public function showProjectList(Request $request){


        if($request->has('platform')){

            $projects = Project::where('platform','LIKE','%'.$request->platform."%")->get();
        }
        else{
            $projects = Project::all();

        }


        return view('projects.projects-list', compact('projects'));
    }
}

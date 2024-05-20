<?php
namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return Project::all();
    }

    public function store(StoreProjectRequest $request)
    {
        return Project::create($request->validated());
    }

    public function show($id)
    {
        return Project::findOrFail($id);
    }

    public function update(UpdateProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->validated());

        return $project;
    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

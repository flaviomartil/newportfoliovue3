<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Http\Requests\StoreExperienceRequest;
use App\Http\Requests\UpdateExperienceRequest;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        return Experience::all();
    }

    public function store(StoreExperienceRequest $request)
    {
        return Experience::create($request->validated());
    }

    public function show($id)
    {
        return Experience::findOrFail($id);
    }

    public function update(UpdateExperienceRequest $request, $id)
    {
        $experience = Experience::findOrFail($id);
        $experience->update($request->validated());

        return $experience;
    }

    public function destroy($id)
    {
        Experience::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

}

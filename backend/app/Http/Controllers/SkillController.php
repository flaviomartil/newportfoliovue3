<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return Skill::all();
    }

    public function store(StoreSkillRequest $request)
    {
        return Skill::create($request->validated());
    }

    public function show($id)
    {
        return Skill::findOrFail($id);
    }

    public function update(UpdateSkillRequest $request, $id)
    {
        $skill = Skill::findOrFail($id);
        $skill->update($request->validated());

        return $skill;
    }

    public function destroy($id)
    {
        Skill::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

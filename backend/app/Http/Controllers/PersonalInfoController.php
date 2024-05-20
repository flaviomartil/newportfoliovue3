<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use App\Http\Requests\StorePersonalInfoRequest;
use App\Http\Requests\UpdatePersonalInfoRequest;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function index()
    {
        return PersonalInfo::all();
    }

    public function store(StorePersonalInfoRequest $request)
    {
        return PersonalInfo::create($request->validated());
    }

    public function show($id)
    {
        return PersonalInfo::findOrFail($id);
    }

    public function update(UpdatePersonalInfoRequest $request, $id)
    {
        $personalInfo = PersonalInfo::findOrFail($id);
        $personalInfo->update($request->validated());

        return $personalInfo;
    }

    public function destroy($id)
    {
        PersonalInfo::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

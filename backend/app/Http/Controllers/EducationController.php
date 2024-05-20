<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Http\Requests\StoreEducationRequest;
use App\Http\Requests\UpdateEducationRequest;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        return Education::all();
    }

    public function store(StoreEducationRequest $request)
    {
        return Education::create($request->validated());
    }

    public function show($id)
    {
        return Education::findOrFail($id);
    }

    public function update(UpdateEducationRequest $request, $id)
    {
        $education = Education::findOrFail($id);
        $education->update($request->validated());

        return $education;
    }

    public function destroy($id)
    {
        Education::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

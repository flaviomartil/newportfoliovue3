<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComponentRequest;
use App\Http\Requests\UpdateComponentRequest;
use App\Models\Component;

class ComponentController extends Controller
{
    public function store(StoreComponentRequest $request)
    {
        $data = $request->validated();
        $component = Component::create($data);

        return response()->json([
            'message' => 'Component created successfully!',
            'component' => $component,
        ], 201);
    }

    public function update(UpdateComponentRequest $request, Component $component)
    {
        $data = $request->validated();
        $component->update($data);

        return response()->json([
            'message' => 'Component updated successfully!',
            'component' => $component,
        ], 200);
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return About::all();
    }

    public function store(StoreAboutRequest $request)
    {
        return About::create($request->validated());
    }

    public function show($id)
    {
        return About::findOrFail($id);
    }

    public function update(UpdateAboutRequest $request, $id)
    {
        $about = About::findOrFail($id);
        $about->update($request->validated());

        return $about;
    }

    public function destroy($id)
    {
        About::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

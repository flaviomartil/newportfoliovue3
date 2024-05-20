<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\PersonalInfo;
use App\Models\Experience;
use App\Models\Project;
use App\Models\About;
class PortfolioController extends Controller
{
    public function __construct()
    {
    }


    /**
     * @OA\Get(
     *     path="/api/user",
     *     @OA\Response(response="200", description="Display a listing of users.")
     * )
     */
    public function index()
    {
        $user = User::with('personalInfo', 'abouts', 'experiences', 'education', 'projects','skills','components')->first();
        $user->components = $user->componentsGrouped;


        return response()->json([
            'user' => $user,
        ]);
    }


    public function store(StoreUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if ($request->hasFile('avatar')) {
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatars');
        }

        return response()->json([
           'user' => $user
        ]);
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        if ($request->hasFile('avatar')) {
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatars');
        }

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}

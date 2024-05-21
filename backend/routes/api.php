<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ContactFormController;


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource('projects', ProjectController::class);
    Route::apiResource('experiences', ExperienceController::class);
    Route::apiResource('education', EducationController::class);
    Route::apiResource('skills', SkillController::class);
    Route::apiResource('about', AboutController::class);
    Route::apiResource('components', ComponentController::class);
    Route::apiResource('personal-info', PersonalInfoController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
        Route::post('users', [PortfolioController::class, 'store']);
        Route::get('users/{user}', [PortfolioController::class, 'show']);
        Route::put('users/{user}', [PortfolioController::class, 'update']);
        Route::delete('users/{user}', [PortfolioController::class, 'destroy']);
});

Route::post('/contact-form', [ContactFormController::class, 'store']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('users', [PortfolioController::class, 'index']);

Route::get('/docs', function () {
    $url = getenv('APP_SWAGGER');
    return redirect($url);
});

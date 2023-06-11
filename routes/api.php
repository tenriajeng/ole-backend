<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\CourseMaterialController;
use App\Http\Controllers\Api\CourseSectionController;
use App\Models\CourseMaterial;
use App\Models\CourseSection;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//API route for register new user
Route::post('/register', [AuthController::class, 'register']);
//API route for login user
Route::post('/login', [AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('courses', [CourseController::class, 'store']);
    Route::put('courses', [CourseController::class, 'update']);

    Route::post('courses-section', [CourseSectionController::class, 'store']);

    Route::post('courses-material', [CourseMaterialController::class, 'store']);

    Route::get('profile', [UserController::class, 'show']);

    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{slug}', [CourseController::class, 'show']);
Route::get('/material/{slug}', [CourseMaterialController::class, 'show']);

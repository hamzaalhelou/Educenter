<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Api\CourseController as ApiCourseController;
use App\Http\Controllers\API\CourseController as ControllersAPICourseController;
use App\Http\Controllers\Api\CoursePostController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('users', function(){

        return response()->json([
                "status" => true,
                "message" => "All users",
                "data" => User::all(),
        ],200);

});


Route::get('users/{id}', function($id){


    $user = User::find($id);

        if($user) {

            return response()->json([
                "status" => true,
                "message" => "Show users",
                "data" => $user,
        ],200);


        } else {

            return response()->json([
                "status" => false,
                "message" => "Not Found",
        ],404);


        }


});
Route::prefix('educenter')->group(function() {
    Route::apiResource('courses', ApiCourseController::class);
});

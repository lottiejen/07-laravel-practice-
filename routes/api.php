<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OwnerController;
use App\Http\Controllers\API\AnimalController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// owner controller routes
// the prefix owners means that all of the routes inside that group will start with /owners. 
Route::group(["prefix" => "owners"], function() {


    Route::get('', [OwnerController::class, "index"]); // using this syntax to point to the controller 
    Route::get('{owner}', [OwnerController::class, "show"]);  // route that shows owners by specfic ID 
    Route::delete('{owner}', [OwnerController::class, "destroy"]); // route that deletes a user 
    Route::post('', [OwnerController::class, "store"]);

    

    // animal controller route
    //   /owners/{owner}/animals e.g. /owners/3/animals   3=owner id
    Route::get('{owner}/animals', [AnimalController::class, 'index']);
    //  /owners/{owner}/animals/{owner}
    Route::get('{owner}/animals/{animal}', [AnimalController::class, 'show']);
    Route::post('', [AnimalController::class, 'store']);
    Route::put('{owner}/animals/{animal}', [AnimalController::class, 'update']); // 
    Route::post('{owner}/animals', [AnimalController::class, 'store']);
    
});




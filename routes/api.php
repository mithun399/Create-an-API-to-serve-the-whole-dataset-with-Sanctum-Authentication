<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
use App\Http\Controllers\userController;


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
Route::get("add",[apiController::class,"addData"]);
Route::post("login",[userController::class,'index']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    
    Route::get("get",[apiController::class,"getData"]);

    });
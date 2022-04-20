<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NodeController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// Add a new node to the tree.
Route::post('nodes', [NodeController::class, 'store']);

// Get all child nodes of a given node from the tree. (Just 1 layer of children)
Route::get('nodes/{nodeId}', [NodeController::class, 'show']);

// Change the parent node of a given node.
Route::patch('nodes/{nodeId}', [NodeController::class, 'changeNodeParentId']);
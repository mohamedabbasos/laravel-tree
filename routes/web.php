<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Add a new node to the tree.
Route::get('nodes/create', function () {
    return json_encode(["x"=>123]);
});

// Get all child nodes of a given node from the tree. (Just 1 layer of children)

Route::get('nodes/{node}', function () {
    return json_encode(["y"=>123]);
});


// Change the parent node of a given node.


Route::get('nodes/{node}/{newParent}', function () {
    return json_encode(["y"=>123]);
});
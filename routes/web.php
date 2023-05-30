<?php

use App\Http\Controllers\Bazmacontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("example", function () {
    return "Example get route";
});
Route::get("coba,", function(){
    return view("coba", ['nama' => 'bintang']);
});
Route::get("/example/{example}", function ($exampleID){
    return "example number : $exampleID";
});
Route::get("/posts/{postid}/comments/{commentsid}", function($postid,$commentsid){
return "ini $postid dan comments ke : $commentsid";
});


Route::get("post/{postId}", function($postId = null){
    return "post opsional: $postId";
});
Route::get("/coba/example", [CobaController::class, "example"]);
Route::post("/coba/nested-input", [CobaController::class, 'nestedRequest']);
Route::get("/response", [Bazmacontroller::class,'responseFunction']);

Route::get("/response/header", [App\Http\Controllers\Bazmacontroller::class, 'responseHeader']);
Route::get("/enkripsi/code", [App\Http\Controllers\Bazmacontroller::class, 'encryptionData']);

Route::get("/redirect/to", [App\Http\Controllers\Bazmacontroller::class, 'redirectTo']);
Route::get("/redirect/from", [App\Http\Controllers\Bazmacontroller::class, 'redirectFrom']);

Route::get("/redirect/to/named", [App\Http\Controllers\Bazmacontroller::class, 'redirectToNamedRoute'])->name("redirect.to");
Route::get("/redirect/from/named", [App\Http\Controllers\Bazmacontroller::class, 'redirectFromNamedRoute']);


<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get("/notes", [NoteController::class,"index"])->name("notes.index");
    Route::get("/notes/createPage",[NoteController::class,"createPage"])->name("notes.createPage");
    Route::post("/notes/addNote",[NoteController::class,"addNote"])->name("notes.addNote");
    Route::get("/notes/details/{note_id}",[NoteController::class,"detail1"])->name("notes.detail1");
});

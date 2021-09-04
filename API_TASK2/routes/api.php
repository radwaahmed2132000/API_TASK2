<?php

use App\Http\Controllers\questionscontroller;
use App\Http\Controllers\answerscontroller;
use Illuminate\Http\Request;
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
*///deletequestions
//ShowQuestion
Route::get('/ShowQuestion', [answerscontroller::class,'ShowQuestion']);
Route::get('/deletequestions/{questions}',[questionscontroller::class,'deletequestions'] );
// POST request to add new questions
Route::post('/addnewquestions',[questionscontroller::class,'add'] );
// show specific post
Route::get('/questions/{questions}', [questionscontroller::class,'show']);
// show all questions
Route::get('/questions', [questionscontroller::class,'index']);
//////
Route::get('/deleteanswers/{answers}',[answerscontroller::class,'deleteanswers'] );
// POST request to add new questions
Route::post('/addanswers',[answerscontroller::class,'add'] );
// show specific post
Route::get('/answers/{answers}', [answerscontroller::class,'show']);
// show all questions
Route::get('/answers', [answerscontroller::class,'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    // User::create([
    //     'name'=>'doe',
    //     'email'=>'doe@doe.com',
    //     'password'=>'doedoe'
    // ]);
    return User::all()->toResourceCollection()->response()->header('Content-Type','text/plain');
})->middleware('auth');

Route::get('/teams', function (Request $request) {
    // User::create([
    //     'name'=>'doe',
    //     'email'=>'doe@doe.com',
    //     'password'=>'doedoe'
    // ]);
    return User::all()->toResourceCollection();
})->middleware([HandlePrecognitiveRequests::class]);

<?php

use App\Models\User;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/r', function (Request $request) {

    $users=User::all();

    return view('r');

})->name('r');

Route::get('/', function (Request $request) {

    $users=User::all();

    return $request->header('ApiRequest')?$users:view('home',['users'=>$users]);

})->name('home');

Route::get('/data', function (Request $request) {
    // $request->validate([
    //     'name'=>['required']
    // ]);
    
    return [User::all(),$request->header('isAjax')];

})->middleware(HandlePrecognitiveRequests::class);

Route::get('/user/{slug}/{user}', function (Request $request,string $slug,User $user) {
   
    $expectSlug=str($user->name)->slug()->toString();
   
    if($expectSlug !== $slug ){
        return redirect()->route('home.user',['slug'=>$expectSlug,'user'=>$user->id]);
    }

    return "{$user->name} {$user->email}";

})->name('home.user');

Route::redirect('/bigdata','/');

Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
    
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

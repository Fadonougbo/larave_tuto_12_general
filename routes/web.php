<?php

use Facades\App\Helper\Helper;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {

    dump(Helper::getID());
    dump(Helper::getID());
    dump(Helper::getID());
    //User::factory()->create();
    return 'okok2';

})->name('home');

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

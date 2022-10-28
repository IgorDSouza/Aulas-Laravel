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

// Route::get('user', function () {
//     return 'ola';
// });

// route::get('users/{user}', function(\App\Models\User $user){
//  return $user;
// });

route::get('user/{user}',[\App\Http\Controllers\UserController::class, 'show'])->name('user.show');

route::get('users',[\App\Http\Controllers\UserController::class, 'index']
);



route::get('/request',function (\Illuminate\Http\Request $request){
    $r = $request;

    return $r->fullUrl();
});
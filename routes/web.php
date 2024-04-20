<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\Register;

Route::get('/', function (Request $req) {
    if (!$req->user()) {
        return redirect('/login');
    }
});

Route::get('/login', Login::class)->name('app.login');
Route::get('/register', Register::class)->name('app.register');


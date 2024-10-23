<?php

use App\Notifications\ExampleNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});

Route::post('/form-submit', function () {
    Notification::route('telegram', '937374064')->notify(new ExampleNotification());
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/courses', function () {
    return view('courses'); // This will look for resources/views/courses.blade.php
});
// Add this in your routes/web.php
Route::get('/whatsapp-link', function() {
    $phoneNumber = '9322967271'; // Your WhatsApp phone number
    return response()->json([
        'whatsappLink' => 'https://wa.me/' . $phoneNumber
    ]);
});

<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Otavio Araújo',
        'frameworks' => [
            'Laravel', 'Vue', 'Inertia'
        ],
    ]);
});

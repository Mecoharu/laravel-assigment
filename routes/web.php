<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pbkk', function () {
    $projects = [
        ['name' => 'Project A', 'description' => 'Description for Project A', "id" =>1],
        ['name' => 'Project B', 'description' => 'Description for Project B', "id" =>2],
        ['name' => 'Project C', 'description' => 'Description for Project C', "id" =>3],
    ];

    return view('pbkk.index', ['greeting' => 'Hello!', 'projects' => $projects]);
});

Route::get('/pbkk/{id}', function ($id) {
  
    return view('pbkk.show', ['id' => $id]);
});
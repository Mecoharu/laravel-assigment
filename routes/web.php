<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/ninjas', function () {
    $ninjas =[
        ["name"=>"Ryu","age"=>25, "id"=>1],
        ["name"=>"Yoshi","age"=>30, "id"=>2],
        ["name"=>"Satoru","age"=>35, "id"=>3],
        ["name"=>"Douma","age"=>28, "id"=>4]
    ];
    return view('ninjas.index', ["greeting" => "Hello","ninjas"=> $ninjas ]);
});

Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ["id"=>$id]);
});
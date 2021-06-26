<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', function(){
    $series = [
        'Grey\'s Anatomy',
        'Lost',
        'Agents of Shield'
    ];

    $html = "<ul>";
    foreach ($series as $serie){
        $html .= "<li>$serie</li>";
    }
    $html .= "</ul>";

    return $html;
});
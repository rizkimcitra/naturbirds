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
    $birdCards = array(
        array("name" => "Wood Garden Birds", "image" => "/card-hero-1.png"),
        array("name" => "Obin European Birds", "image" => "/card-hero-2.png"),
        array("name" => "Crow Perchead Birds", "image" => "/card-hero-3.png")
    );
    
    
    $homeData = array(
        "title" => "NaturBirds",
        "nav" => array(
            array("name" => "Home", "href" => "/"),
            array("name" => "About", "href" => "/about"),
            array("name" => "Features", "href" => "/features"),
            array("name" => "Blog", "href" => "/blog")
        ),
        "birds" => $birdCards
    );
    return view('index', $homeData);
});

Route::get('/about', function(){
    $data = array(
        "title" => "About - NatureBirds",
        "image" => "/image/about-hero.png",
        "description" => "Naturbirds was created to protect endangered birds and as an introduction to children for learning media, introducing and caring for birds, and so on. More click read more."
    );

    return view('about', $data);
});

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
        "title" => "NaturBirds",
        "image" => "/image/about-hero.png",
        "description" => "Naturbirds was created to protect endangered birds and as an introduction to children for learning media, introducing and caring for birds, and so on. More click read more.",
        "nav" => array(
            array("name" => "Home", "href" => "/"),
            array("name" => "About", "href" => "/about"),
            array("name" => "Features", "href" => "/features"),
            array("name" => "Blog", "href" => "/blog")
        ),
        "company" => array("/image/bumn.png", "/image/abc.png", "/image/ga.png", "/image/pos.png")
    );

    return view('about', $data);
});

Route::get('/features', function(){

    $data = array(
        "title" => "NaturBirds",
        "subtitle" => "The bird who dares to fall is the bird learns to fly.",
        "subhero_title" => "Advancing Science and coservation",
        "subhero_description" => "Your sightings contribute hundreds of conservation decisions and peer- reviewed papers, thousands of student projects.",
        "subhero_image" => "/image/features-hero.png",
        "nav" => array(
            array("name" => "Home", "href" => "/"),
            array("name" => "About", "href" => "/about"),
            array("name" => "Features", "href" => "/features"),
            array("name" => "Blog", "href" => "/blog")
        ),
        "cards" => array(
            array(
            "image" => "/image/world-inspect.svg",
            "title" => "Find more birds",
            "description" => "Explore birds and hotspots near you and wherever you go, all based on..."),
            array(
            "image" => "/image/community.svg",
            "title" => "Share Your Sightings",
            "description" => "Join the world's largest birding community. Every sighting..."),
            array(
            "image" => "/image/tracker.svg",
            "title" => "Track your lists",
            "description" => "What's your latest life bird? what bird lists do you care about?...")
            )
    );

    return view('features', $data);
});

Route::get('/blog', function(){

    $data = array(
        "title" => "NaturBirds",
        "hero_title" => "Bird look great when they fly, don't let our chirpy friends die",
        "card_title" => "Global Bid Day 2021 reaches new heights",
        "card_description" => "Birds unite people. On Saturday, 8 May more than 51,000 people spanning 192 countries celebrayed the birds around",
        "card_image" => "/image/blog-hero.jpg",
        "app_title" => "NaturBirds App",
        "app_description" => "Nuturbirds can now be downloaded on the appstore and playstore, now accessing Naturbirds is easier, more efficient and faster. And you don't bother if you are on your way to see birds and collect bird data that you photograph.",
        "app_image" => "/image/phone.png",
        "nav" => array(
            array("name" => "Home", "href" => "/"),
            array("name" => "About", "href" => "/about"),
            array("name" => "Features", "href" => "/features"),
            array("name" => "Blog", "href" => "/blog")
        ),
    );

    return view('blog', $data);
});
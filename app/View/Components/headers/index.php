<?php

namespace App\View\Components\headers;

use Illuminate\View\Component;

class Headder extends Component
{

    public $nav = array(
        array("name" => "Home", "href" => "/"),
        array("name" => "About", "href" => "/about"),
        array("name" => "Features", "href" => "/features"),
        array("name" => "Blog", "href" => "/blog")
        );
    

    /**
     * Create a new component instance.
     * 
     *
     * @return void
     */
    public function __construct($nav)
    {
        $this->nav = $nav;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.headers.index');
    }
}

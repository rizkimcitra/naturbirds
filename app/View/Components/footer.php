<?php

namespace App\View\Components;

use Illuminate\View\Component;

class footer extends Component
{

    public $title;
    public $logos = array(
        array("type" => "logo", "name" => "facebook"),
        array("type" => "logo", "name" => "twitter"),
        array("type" => "logo", "name" => "instagram-alt"),
        array("type" => "logo", "name" => "behance"),
        array("type" => "logo", "name" => "dribbble")
    );
    public $footerData = array(
       "explore" =>  array(
            array("title" => "Species Map"),
            array("title" => "Explore a Region"),
            array("title" => "Explore a Hotspot"),
            array("title" => "Explore a Maps")
       ),
       "science" => array(
           array("title" => "Observation"),
           array("title" => "Conversation Habits"),
           array("title" => "Tracking Habits"),
           array("title" => "Data Publications")
       ),
       "spot" => array(
           array("title" => "Zone Photograph"),
           array("title" => "Documentation"),
           array("title" => "Gallery"),
           array("title" => "Maps Tracking")
       )
    );


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}

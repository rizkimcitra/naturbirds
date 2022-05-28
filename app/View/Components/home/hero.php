<?php

namespace App\View\Components\home;

use Illuminate\View\Component;

class Hero extends Component
{

    public $birds;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($birds)
    {
        $this->birds = $birds;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home.hero');
    }
}

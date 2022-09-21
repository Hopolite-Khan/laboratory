<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sidebaritem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $route;
    public $title;
    public $children;
    public $active;
    public function __construct($title = 'title', $route = 'home', $children = false)
    {
        $this->title = $title;
        $this->route = $route;
        $this->children = $children;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebaritem');
    }
}

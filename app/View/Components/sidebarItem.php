<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sidebarItem extends Component
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

    public $icon;

    public function __construct($icon = false, $title = 'title', $route = 'home', $children = false)
    {
        $this->title = $title;
        $this->route = $route;
        $this->children = $children;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar-item');
    }
}

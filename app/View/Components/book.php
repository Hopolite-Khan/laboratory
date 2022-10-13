<?php

namespace App\View\Components;

use Illuminate\View\Component;

class book extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title, $feature, $description;
    public function __construct($title, $feature, $description)
    {
        $this->title = $title;
        $this->feature = $feature;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.book');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $value;

    public $errors;

    public $label;

    public $id;

    public $type;

    public $options;

    public function __construct($value = '', $errors = '', $label = '', $id = '', $type = 'text', $options = '')
    {
        $this->value = $value;
        $this->errors = $errors;
        $this->label = $label;
        $this->id = $id;
        $this->type = $type;
        $this->options = explode(',', $options);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}

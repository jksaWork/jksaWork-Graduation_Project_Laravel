<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextArea extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class , $name , $value;
    public function __construct($class , $name , $value = null)
    {
        $this->name = $name;
        $this->class = $class;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-area');
    }
}

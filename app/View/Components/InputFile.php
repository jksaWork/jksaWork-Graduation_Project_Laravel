<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputFile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class, $name;
    public function __construct($class , $name)
    {
        $this->class = $class;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-file');
    }
}

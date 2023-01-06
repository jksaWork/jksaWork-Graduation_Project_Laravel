<?php

namespace App\View\Components;

use Illuminate\View\Component;

class selectOptions extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $options , $name, $class , $value;
    public function __construct($options , $name , $class , $value = null)
    {
        $this->options = $options ;
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
        return view('components.select-options');
    }
}

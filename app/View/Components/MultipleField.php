<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MultipleField extends Component
{
   public $label;
   public $name;
    public function __construct($label,$name)
    {
        $this->label=$label;
        $this->name=$name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('back.layout.multiple_field');
    }
}

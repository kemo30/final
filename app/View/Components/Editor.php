<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Editor extends Component
{
    public $label;
   public $name;
   public $value;
    public function __construct($label,$name,$value='')
    {
        $this->label=$label;
        $this->name=$name;
        $this->value=$value;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('back.layout.editor');
    }
}

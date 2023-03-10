<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextArea extends Component
{
    public $label;
    public $name;
    
    public $placeholder;
    public $value;
    
    public function __construct($label,$name,$placeholder,$value='')
    {
        $this->label=$label;
        $this->name=$name;
       
        $this->placeholder=$placeholder;
        $this->value=$value;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('back.layout.text_area');
    }
}

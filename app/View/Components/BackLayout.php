<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BackLayout extends Component
{
    public $titel ;
    public $pagetitel;
    public $page; 
    
    public function __construct($titel,$page = "servec", $pagetitel )
    {
        $this->titel=$titel;
        $this->page = $page;
        $this->pagetitel = $pagetitel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('back.layout.layout');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MyCardComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;

    public function __construct($title)
    {
        $this->title = substr($title, 0, 30);
    }

    public function shouldRender()
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-card-component');
    }
}
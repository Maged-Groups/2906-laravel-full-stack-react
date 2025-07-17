<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardComponent extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;

    public function __construct($title = null)
    {
        if ($title === null)
            return;

        $this->title = substr($title, 0, 30);

        if (strlen($title) > 30)
            $this->title .= '...';
    }

    public function shouldRender()
    {
        return $this->title !== null;
        // if title is not null, then render the component, otherwise don't render the component.
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-component');
    }
}
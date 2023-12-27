<?php

namespace App\View\Components\Ui\Slider;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Indicators extends Component
{
    public $slides;
    /**
     * Create a new component instance.
     */
    public function __construct($slides = 1)
    {
        $this->slides = $slides;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.slider.indicators');
    }
}

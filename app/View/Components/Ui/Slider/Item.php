<?php

namespace App\View\Components\Ui\Slider;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Item extends Component
{
    public $backgroundImage;
    /**
     * Create a new component instance.
     */
    public function __construct($backgroundimage = "")
    {
        $this->backgroundImage = $backgroundimage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.slider.item');
    }
}

<?php

namespace App\View\Components\Ui\Carousel;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Item extends Component
{
    public $imgsrc;
    public $description;
    public $active;
    /**
     * Create a new component instance.
     */
    public function __construct($imgsrc = "", $description = "", $active = false)
    {
        $this->imgsrc = $imgsrc;
        $this->description = $description;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.carousel.item');
    }
}

<?php

namespace App\View\Components\Blocks\SimplePage;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{
    public $title;
    public $ImageUrl;
    /**
     * Create a new component instance.
     */
    public function __construct($title = '', $imageurl = '')
    {
        $this->title = $title;
        $this->ImageUrl = $imageurl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blocks.simple-page.hero');
    }
}

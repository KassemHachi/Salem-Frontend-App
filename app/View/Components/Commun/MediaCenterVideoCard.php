<?php

namespace App\View\Components\Commun;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MediaCenterVideoCard extends Component
{
    public $title;
    public $imgalt;
    public $imgsrc;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $imgalt, $imgsrc)
    {
        $this->title = $title;
        $this->imgalt = $imgalt;
        $this->imgsrc = $imgsrc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.commun.media-center-video-card');
    }
}

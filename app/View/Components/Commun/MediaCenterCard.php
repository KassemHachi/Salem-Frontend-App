<?php

namespace App\View\Components\Commun;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MediaCenterCard extends Component
{
    public $title = "Media Center Card";
    public $description = "Media Center Card";
    public $datetime = "";
    public $imgSrc = "";
    public $imgAlt = "";
    /**
     * Create a new component instance.
     */
    public function __construct($title = "", $description = "", $datetime = "", $imgsrc = "", $imgalt = "")
    {
        $this->title = $title;
        $this->description = $description;
        $this->datetime = $datetime;
        $this->imgSrc = $imgsrc;
        $this->imgAlt = $imgalt;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.commun.media-center-card');
    }
}

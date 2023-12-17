<?php

namespace App\View\Components\Commun;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VotingProgramCard extends Component
{
    public $title;
    public $description;
    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.commun.voting-program-card');
    }
}

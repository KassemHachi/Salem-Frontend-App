<?php

namespace App\View\Components\Commun;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TweetsCard extends Component
{
    public $tweet;
    public $likes;
    public $retweets;
    /**
     * Create a new component instance.
     */
    public function __construct($tweet = "", $likes = 0, $retweets = 0)
    {
        $this->tweet = $tweet;
        $this->likes = $likes;
        $this->retweets = $retweets;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.commun.tweets-card');
    }
}

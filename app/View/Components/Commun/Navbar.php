<?php

namespace App\View\Components\Commun;

use App\Enums\ItemsNavEnum;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $activePage;
    public $itemsNav;
    /**
     * Create a new component instance.
     */
    public function __construct($activepage = "")
    {
        $this->activePage = $activepage;
        $this->itemsNav = [
            0 => [
                "name" => ItemsNavEnum::HOME,
                "title" => "الرئيسية",
                "url" => route("home"),
            ],
            1 => [
                "name" => ItemsNavEnum::SALEM,
                "title" => "سالم عن قرب",
                "url" => route("about-salem"),
            ],
            2 => [
                "name" => ItemsNavEnum::ACHIEVEMENTS,
                "title" => "الأعمال والإنجازات",
                "url" => route("achievements"),
            ],
            3 => [
                "name" => ItemsNavEnum::MEDIA_CENTER,
                "title" => "المركز الإعلامي",
                "url" => route("media-center"),
            ],
            4 => [
                "name" => ItemsNavEnum::CONTACT_US,
                "title" => "للتواصل",
                "url" => "/#contact-us",
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.commun.navbar');
    }
}

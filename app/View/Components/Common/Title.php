<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class Title extends Component
{
    public $title;
    public $subtitle;
    public function __construct($title, $subtitle = '')
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    public function render()
    {
        return view('components.common.title');
    }
}

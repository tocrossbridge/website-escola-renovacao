<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class Title extends Component
{
    public $title;
    public function __construct($title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('components.common.title');
    }
}

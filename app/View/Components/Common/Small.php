<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class Small extends Component
{
    public $text;
    public function __construct($text)
    {
        $this->text = $text;
    }

    public function render()
    {
        return view('components.common.small');
    }
}

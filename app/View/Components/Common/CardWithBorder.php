<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class CardWithBorder extends Component
{
    public $icon;
    public $title;
    public $text;
    public function __construct($icon, $title, $text)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->text = $text;
    }

    public function render()
    {
        return view('components.common.card-with-border');
    }
}

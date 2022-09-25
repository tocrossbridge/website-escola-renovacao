<?php

namespace App\View\Components\Testimony;

use Illuminate\View\Component;

class Testimony extends Component
{
    public $name;
    public $image;
    public $description;
    public function __construct($name, $image, $description)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }

    public function render()
    {
        return view('components.testimony.testimony');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $variant;

    public function __construct($variant = 'primary')
    {
        $this->variant = $variant;
    }

    public function render(): View|Closure|string
    {
        return view('components.button', [
            'variant' => $this->variant,
        ]);
    }
}

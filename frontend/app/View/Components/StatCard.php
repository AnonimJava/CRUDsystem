<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatCard extends Component
{
    public string $title;
    public string $value;

    public function __construct(string $title, string $value)
    {
        $this->title = $title;
        $this->value = $value;
    }

    public function render(): View|Closure|string
    {
        return view('components.stat-card');
    }
}

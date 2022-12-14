<?php

namespace App\View\Components;

use App\Models\History;
use Illuminate\View\Component;

class map extends Component
{
    public $histories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->histories = History::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.map');
    }
}

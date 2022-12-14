<?php

namespace App\View\Components;

use App\Models\History;
use Illuminate\View\Component;

class mapHistoryEdit extends Component
{
    public $history;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->history = History::find($id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.map-history-edit');
    }
}

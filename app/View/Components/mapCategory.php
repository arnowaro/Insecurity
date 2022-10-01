<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class mapCategory extends Component
{
    // histories of a category
    public $histories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
       $this -> histories = Category::with('history')->find($id)->histories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.map-category');
    }
}

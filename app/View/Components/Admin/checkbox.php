<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class checkbox extends Component
{
    public $name;
    public $errors;
    public $value;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $errors, $value=null, $label=null)
    {
        $this->name = $name;
        $this->errors = $errors;
        $this->value = $value;
        $this->label = $label;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components..admin.checkbox');
    }
}

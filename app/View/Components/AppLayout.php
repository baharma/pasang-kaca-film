<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public $metaHead;
    public $metaBody;
    public function __construct($metaHead=null, $metaBody=null)
    {
        $this->metaHead = $metaHead;
        $this->metaBody = $metaBody;
    }
    public function render(): View
    {
        return view('layouts.app');
    }
}
